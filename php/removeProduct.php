<?php
if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $selected) {
        include_once 'connection.php';
        $query = "SELECT * FROM Product WHERE Product_ID='$selected'";
        $go_query = mysqli_query($connection, $query);
        $num_regs = mysqli_num_rows($go_query);
        if ($num_regs == 1) {
            $delete = "DELETE From Product WHERE Product_ID = '$selected';";
            $go_query = mysqli_query($connection, $delete);
            if ($go_query) {
                unlink('../img/product_pictures/'.$selected.'.jpg');
                $message = "The products were successfully removed";
            } else {
                $message = "Couldn't remove the product <b>$selected</b>";
            }
        } else {
            $message = "A product with the ID <b>$selected</b> does not exist";
            mysqli_close($connection);
        }
    }
}
header("Location: ../index.php?op=removeProduct&message=$message");
