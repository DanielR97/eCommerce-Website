<h3 class="table-name">All Orders in database</h3>

<?php
include 'connection.php';
$show = "SELECT * FROM Client_Order INNER JOIN Composed WHERE Client_Order.Order_ID=Composed.Order_ID;";
$result = mysqli_query($connection, $show);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr class='headers'><th>Order ID</th><th>Order Date</th><th>Client ID</th><th>Quantity</th><th>Product ID</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "</tr><th>" . $row["Order_ID"] . "</th>";
        echo "<th>" . $row["Order_Date"] . "</th>";
        echo "<th>" . $row["Client_ID"] . "</th>";
        echo "<th>" . $row["Quantity"] . "</th>";
        echo "<th>" . $row["Product_ID"] . "</th></tr>";
    }
    echo "</table>";
} else {
    echo "<h3 class='table-name'>No results</h3>";
}
?>