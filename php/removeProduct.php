<?php
if (!empty($_POST['check_list'])) {
    foreach ($_POST['check_list'] as $selected) {
        include_once 'connection.php';
        $query = "SELECT * FROM Product WHERE Product_ID='$selected'";
        $secondQuery = "SELECT * FROM Composed WHERE Product_ID='$selected'";
        $go_query = mysqli_query($connection, $query);
        $go_second_query = mysqli_query($connection, $secondQuery);
        $num_regs = mysqli_num_rows($go_query);
        $second_num_regs = mysqli_num_rows($go_second_query);
        if ($num_regs == 1 && $second_num_regs == 1) {
            $deleteOrder = "DELETE Client_Order.* From Client_Order INNER JOIN Composed WHERE Client_Order.Order_ID=Composed.Order_ID AND Composed.Product_ID = '$selected';";
            $deleteProduct = "DELETE From Product WHERE Product_ID = '$selected';";
            $go_second_query = mysqli_query($connection, $deleteOrder);
            $go_query = mysqli_query($connection, $deleteProduct);
            if ($go_query && $go_second_query) {
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
