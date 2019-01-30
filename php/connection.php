<?php
// Database was created in phpMyAdmin
function connect() {
    $server = 'localhost';
    $user = 'Pepe';
    $password = 'pepa';
    $db = 'commerce';
    $connection = mysqli_connect($server, $user, $password, $db);
    return $connection;
}
$connection = connect();
