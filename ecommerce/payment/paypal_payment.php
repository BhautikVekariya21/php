<?php
require __DIR__ . '/vendor/autoload.php';  // Autoload Composer dependencies
omposer require vlucas/phpdotenv
// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// PayPal API configuration
$clientId = $_ENV['PAYPAL_CLIENT_ID'];
$secretKey = $_ENV['PAYPAL_SECRET_KEY'];

// PayPal API request to get access token
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/oauth2/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERPWD, $clientId . ":" . $secretKey);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'grant_type=client_credentials');
$response = curl_exec($ch);
curl_close($ch);

$accessToken = json_decode($response)->access_token;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $paymentData = [
        'intent' => 'sale',
        'payer' => ['payment_method' => 'paypal'],
        'transactions' => [
            [
                'amount' => ['total' => '50.00', 'currency' => 'USD'],
                'description' => 'Payment for product purchase',
            ]
        ],
        'redirect_urls' => [
            'return_url' => 'http://yourwebsite.com/success.php',
            'cancel_url' => 'http://yourwebsite.com/cancel.php',
        ],
    ];

    // Create PayPal payment
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.sandbox.paypal.com/v1/payments/payment');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($paymentData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken,
    ]);
    $response = curl_exec($ch);
    curl_close($ch);

    $payment = json_decode($response);

    // Redirect to PayPal for approval
    foreach ($payment->links as $link) {
        if ($link->rel == 'approval_url') {
            header("Location: " . $link->href);
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Payment</title>
</head>
<body>
    <h1>Pay with PayPal</h1>
    <form action="paypal_payment.php" method="POST">
        <input type="submit" value="Pay with PayPal">
    </form>
</body>
</html>
