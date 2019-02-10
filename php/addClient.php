<?php
$clientId = $_POST['client-id'];
$clientName = $_POST['client-name'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
include 'connection.php';
$query = "SELECT * FROM Client WHERE Client_ID='$clientId'";
$go_query = mysqli_query($connection, $query);
$num_regs = mysqli_num_rows($go_query);
if ($num_regs == 0) {
    $insert = "INSERT INTO Client (Client_ID, Client_Name, Gender, Birthdate, Phone) VALUES ('$clientId', '$clientName', '$gender', '$birthdate', '$phone');";
    $go_query = mysqli_query($connection, $insert);
    if ($go_query) {
        $message = "A client with the ID <b>$clientId</b> was successfully introduced";
    } else {
        $message = "Couldn't add the client with the ID <b>$clientId</b>";
    }
} else {
    $message = "A client with the ID <b>$clientId</b> already exists";
    mysqli_close($connection);
}

header("Location: ../index.php?op=insertClient&message=$message");
