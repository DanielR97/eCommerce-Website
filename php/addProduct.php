<?php
$productName = $_POST['product-name'];
$productId = $_POST['product-id'];
include 'connection.php';
$query = "SELECT * FROM Product WHERE Product_ID='$productId'";
$go_query = mysqli_query($connection, $query);
$num_regs = mysqli_num_rows($go_query);
if ($num_regs == 0) {
    include 'functions.php';
    $type = $_FILES['product-picture']['type'];
    $file = $_FILES['product-picture']['tmp_name'];
    $img_uploaded = upload_image($type, $file, $productId);
    $productPicture = (empty($file)) ? $generic_img : $img_uploaded;
    $insert = "INSERT INTO Product (Product_ID, Product_Name, Picture) VALUES ('$productId', '$productName', '$productPicture');";
    if ($img_uploaded != false) {
        $go_query = mysqli_query($connection, $insert);
    }
    if ($go_query && $img_uploaded) {
        $message = "The product with the ID <b>$productId</b> was uploaded";
    } else {
        $message = "Couldn't add the product with the ID <b>$productId</b>";
    }
} else {
    $message = "A product with the ID <b>$productId</b> already exists";
    mysqli_close($connection);
}

header("Location: ../index.php?op=addProduct&message=$message");
