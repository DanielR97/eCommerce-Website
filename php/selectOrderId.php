<?php
include_once 'connection.php';
$query = 'SELECT * FROM Client_Order ORDER BY Order_ID';
$go_query = mysqli_query($connection, $query);
while ($register = mysqli_fetch_array($go_query)) {
    $orderId = utf8_encode($register['Order_ID']);
    echo "<option value='$orderId'>$orderId</option>";
}
