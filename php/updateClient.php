<?php
$clientId = $_POST['client-id'];
$newClientId = $_POST['new-client-id'];
$clientName = $_POST['client-name'];
$phone = $_POST['phone'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
include 'connection.php';
$query = "SELECT * FROM Client WHERE Client_ID='$clientId'";
$go_query = mysqli_query($connection, $query);
$num_regs = mysqli_num_rows($go_query);
if ($num_regs == 1) {
    $update = "UPDATE Client SET Client_ID = '$newClientId', Client_Name = '$clientName', Gender = '$gender', Birthdate = '$birthdate', Phone = '$phone' WHERE Client_ID = '$clientId';";
    $go_query = mysqli_query($connection, $update);
    if ($go_query) {
        $message = "The client's <b>$clientId</b> information was successfully updated";
    } else {
        $message = "Couldn't update the client's <b>$clientId</b> information";
    }
} else {
    $message = "A client with the ID <b>$clientId</b> does not exist";
    mysqli_close($connection);
}

header("Location: ../index.php?op=updateClient&message=$message");
