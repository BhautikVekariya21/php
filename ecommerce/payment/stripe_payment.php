<?php
require 'vendor/autoload.php';  // Autoload Composer dependencies
composer require vlucas/phpdotenv
// Load .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Stripe configuration
\Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);  // Get the Stripe secret key from .env

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['stripeToken'];  // Get the token from the Stripe checkout form

    try {
        // Create a charge on the user's card
        $charge = \Stripe\Charge::create([
            'amount' => 5000,  // Charge amount in cents (e.g., $50.00)
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
        ]);

        // Payment successful
        echo "Payment successful!";
    } catch (\Stripe\Exception\CardException $e) {
        // Handle payment error
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripe Payment</title>
</head>
<body>
    <h1>Pay with Stripe</h1>
    <form action="stripe_payment.php" method="POST">
        <script
            src="https://checkout.stripe.com/checkout.js"
            class="stripe-button"
            data-key="<?php echo $_ENV['STRIPE_PUBLISHABLE_KEY']; ?>"
            data-description="Example charge"
            data-amount="5000"
            data-locale="auto">
        </script>
    </form>
</body>
</html>
