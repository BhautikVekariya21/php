<?php
session_start();
include('includes/auth.php'); // Check if user is logged in as admin

// If not logged in, redirect to login page
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

include('includes/db.php');

// Fetch orders from the database
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Orders</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="manage-orders">
        <h1>Manage Orders</h1>
        <table>
            <tr>
                <th>Order ID</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
            <?php while ($order = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $order['order_id']; ?></td>
                <td><?php echo $order['user_name']; ?></td>
                <td><?php echo $order['total']; ?></td>
                <td><?php echo $order['status']; ?></td>
                <td>
                    <a href="view_order.php?id=<?php echo $order['order_id']; ?>">View</a>
                    <a href="delete_order.php?id=<?php echo $order['order_id']; ?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
