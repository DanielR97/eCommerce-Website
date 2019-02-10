<?php
$productName = $_POST['product-name'];
$productId = $_POST['product-id'];
$newProductId = $_POST['new-product-id'];
include 'connection.php';
$query = "SELECT * FROM Product WHERE Product_ID='$productId'";
$go_query = mysqli_query($connection, $query);
$num_regs = mysqli_num_rows($go_query);
if ($num_regs == 1) {
    include 'functions.php';
    $type = $_FILES['product-picture']['type'];
    $file = $_FILES['product-picture']['tmp_name'];
    $img_uploaded = upload_image($type, $file, $newProductId);
    $productPicture = (empty($file)) ? $generic_img : $img_uploaded;
    $update = "UPDATE Product SET Product_ID = '$newProductId', Product_Name = '$productName', Picture= '$productPicture' WHERE Product_ID = '$productId';";
    if ($img_uploaded != false) {
        $go_query = mysqli_query($connection, $update);
    }
    if ($go_query && $img_uploaded) {
        $message = "The product's <b>$productId</b> information was successfully updated";
    } else {
        $message = "Couldn't update the product's <b>$productId</b> information";
    }
} else {
    $message = "A product with the ID <b>$productId</b> does not exist";
    mysqli_close($connection);
}

header("Location: ../index.php?op=updateProduct&message=$message");