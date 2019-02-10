<?php
//Function to always upload a product picture as .jpg
function upload_image($type, $image, $productId) {
    //If the file type contains the word image, it"s an image file
    if (strstr($type, "image")) {
        $destiny = "../img/product_pictures/" . $productId . ".jpg";
        move_uploaded_file($image, $destiny) or die("Coulnd't upload image to server"); // Upload picture
        $img_name = "../img/product_pictures/" . $productId;    // Delete duplicated images to avoid repetition
        //Name of picture assigned on the database as a string
        $image = $productId . ".jpg";   // Name of picture assigned on the database as a string with a .jpg extension as requested
        return $image;
    } else {
        return false;
    }
}
