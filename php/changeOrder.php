<?php
$orderId = $_POST['order-id'];
$newOrderId = $_POST['new-order-id'];
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
if ($num_regs == 1 && $num_regs2 == 1) {
    $query = "UPDATE Client_Order SET Order_ID = '$newOrderId', Order_Date =  '$orderDate', Client_ID = '$clientId' WHERE Order_ID = '$orderId';";
    $secondQuery = "UPDATE Composed SET Order_ID = '$newOrderId', Quantity = '$quantity', Product_ID = '$productId' WHERE Order_ID = '$newOrderId';";
    $go_query = mysqli_query($connection, $query);
    $go_second_query = mysqli_query($connection, $secondQuery);
    if ($go_query && $go_second_query) {
		$message = "Order's <b>$orderId</b> information was successfully updated";
    } else {
        $message = "There was a problem trying to update the order's <b>$orderId</b> information";
    }
} else {
    $message = "Order <b>$orderId</b> does not exist";
    mysqli_close($connection);
}

header("Location: ../index.php?op=changeOrder&message=$message");