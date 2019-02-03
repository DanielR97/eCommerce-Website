<h3 class="table-name">All Clients in database</h3>

<?php
include 'connection.php';
$show = "SELECT * FROM Client;";
$result = mysqli_query($connection, $show);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr class='headers'><th>Client ID</th><th>Client Name</th><th>Gender</th><th>Birthdate</th><th>Phone</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "</tr><th>" . $row["Client_ID"] . "</th>";
        echo "<th>" . $row["Client_Name"] . "</th>";
        echo "<th>" . $row["Gender"] . "</th>";
        echo "<th>" . $row["Birthdate"] . "</th>";
        echo "<th>" . $row["Phone"] . "</th></tr>";
    }
    echo "</table>";
} else {
    echo "<h3 class='table-name'>No results</h3>";
}
?>