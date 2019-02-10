<?php
if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $selected) {
        include_once 'connection.php';
        $query = "SELECT * FROM Client_Order WHERE Order_ID='$selected'";
        $go_query = mysqli_query($connection, $query);
        $num_regs = mysqli_num_rows($go_query);
        if ($num_regs == 1) {
            $delete = "DELETE From Client_Order WHERE Order_ID = '$selected';";
            $go_query = mysqli_query($connection, $delete);
            if ($go_query) {
                $message = "The orders were successfully removed";
            } else {
                $message = "Couldn't remove the order <b>$selected</b>";
            }
        } else {
            $message = "An order with the ID <b>$selected</b> does not exist";
            mysqli_close($connection);
        }
    }
}
header("Location: ../index.php?op=cancelOrder&message=$message");
