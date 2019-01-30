<?php
$orderId = $_POST['order-id'];
$orderDate = $_POST['order-date'];
$clientId = $_POST['client-id'];
$productId = $_POST['product-id'];
$quantity = $_POST['quantity'];
include 'connection.php';
$query = "SELECT * FROM Client_Order WHERE Order_ID='$orderId'";
$secondQuery = "SELECT * FROM Composed WHERE Order_ID='$orderId'";
$go_query = mysqli_query($connection, $query);
$go_second_query = mysqli_query($connection, $secondQuery);
$num_regs2 = mysqli_num_rows($go_second_query);
$num_regs = mysqli_num_rows($go_query);
if ($num_regs == 0 && $num_regs2 == 0) {
    $query = "INSERT INTO Client_Order (Order_ID, Order_Date ,Client_ID) VALUES ('$orderId','$orderDate','$clientId');";
    $secondQuery = "INSERT INTO Composed (Quantity, Product_ID, Order_ID) VALUES ('$quantity','$productId','$orderId');";
    $go_query = mysqli_query($connection, $query);
    $go_second_query = mysqli_query($connection, $secondQuery);
    if ($go_query && $go_second_query) {
		$message = "Order <b>$orderId</b> was successfully created";
    } else {
        $message = "There was a problem trying to create the order <b>$orderId</b>";
    }
} else {
    $message = "Order <b>$orderId</b> already exists";
    mysqli_close($connection);
}

header("Location: ../index.php?op=orderSomething&message=$message");