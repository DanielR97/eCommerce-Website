<h3 class="table-name">All Products in database</h3>

<?php
include 'connection.php';
$show = "SELECT * FROM Product;";
$result = mysqli_query($connection, $show);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr class='headers'><th>Product ID</th><th>Product Name</th><th>Picture</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "</tr><th>" . $row["Product_ID"] . "</th>";
        echo "<th>" . $row["Product_Name"] . "</th>";
        echo "<th><img src='img/product_pictures/" . $row["Picture"] . "' alt='Product Picture' height='150' widht='150'></th></tr>";
    }
    echo "</table>";
} else {
    echo "<h3 class='table-name'>No results</h3>";
}
?>