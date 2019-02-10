<?php
include_once 'connection.php';
$query = 'SELECT * FROM Client_Order ORDER BY Order_ID';
$go_query = mysqli_query($connection, $query);
if ($go_query->num_rows > 0) {
    while ($register = mysqli_fetch_array($go_query)) {
        $orderId = utf8_encode($register['Order_ID']);
        $clientId = utf8_encode($register['Client_ID']);
        $orderDate = utf8_encode($register['Order_Date']);
        echo "<input type='checkbox' name='check_list[]' value='$orderId'> $orderId - From client $clientId on $orderDate<br>";
    }
} else {
    echo "There are no orders";
}
