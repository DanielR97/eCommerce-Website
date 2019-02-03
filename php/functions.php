<?php
//Function to always upload a product picture as .jpg
function upload_image($type, $image, $productId) {
	//strstr($str1,$str2) checks if str1 contains str2
    //If the file type contains the word image, it"s an image file
    if (strstr($type, "image")) {
        //File is an image
        if (strstr($type, "jpeg")) {
            $extension = ".jpg";
        } else if (strstr($type, "gif")) {
            $extension = ".jpg";
        } else if (strstr($type, "png")) {
            $extension = ".jpg";
        }
        $destiny = "../img/product_pictures/" . $productId . $extension;
        //Upload picture
        move_uploaded_file($image, $destiny) or die("Coulnd't upload image to server");
        //Delete duplicated images to avoid repetition
        $img_name = "../img/product_pictures/" . $productId;
        //Name of picture assigned on the database as a string
        $image = $productId . $extension;
        return $image;
    } else {
        return false;
    }
}
