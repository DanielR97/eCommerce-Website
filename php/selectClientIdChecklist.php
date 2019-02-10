<?php
include_once 'connection.php';
$query = 'SELECT * FROM Client ORDER BY Client_ID';
$go_query = mysqli_query($connection, $query);
if ($go_query->num_rows > 0) {
    while ($register = mysqli_fetch_array($go_query)) {
        $clientId = utf8_encode($register['Client_ID']);
        $clientName = utf8_encode($register['Client_Name']);
        echo "<input type='checkbox' name='check_list[]' value='$clientId'> $clientId - $clientName<br>";
    }
} else {
    echo "There are no clients";
}
