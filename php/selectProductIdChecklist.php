<?php
include_once 'connection.php';
$query = 'SELECT * FROM Product ORDER BY Product_ID';
$go_query = mysqli_query($connection, $query);
if ($go_query->num_rows > 0) {

    while ($register = mysqli_fetch_array($go_query)) {
        $productId = utf8_encode($register['Product_ID']);
        $productName = utf8_encode($register['Product_Name']);
        echo "<input type='checkbox' name='check_list[]' value='$productId'> $productId - $productName<br>";
    }
} else {
    echo "There are no products";
}
