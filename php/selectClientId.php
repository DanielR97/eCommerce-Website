<?php
include_once 'connection.php';
$query = 'SELECT * FROM Client ORDER BY Client_ID';
$go_query = mysqli_query($connection, $query);
while ($register = mysqli_fetch_array($go_query)) {
    $clientId = utf8_encode($register['Client_ID']);
    echo "<option value='$clientId'>$clientId</option>";
}
