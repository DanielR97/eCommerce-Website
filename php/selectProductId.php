<?php
$query = 'SELECT * FROM Product ORDER BY Product_ID';
$go_query = mysqli_query($connection, $query);
while ($register = mysqli_fetch_array($go_query)) {
    $productId = utf8_encode($register['Product_ID']);
    echo "<option value='$productId'>$productId</option>";
}
