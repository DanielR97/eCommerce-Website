<?php
// Delete files with the same name or with an unsupported extension
// file_exists checks if the file existes and unlink delete a file from the server
function delete_image($url, $extension) {
    switch ($extension) {
        case ".jpg":
            if (file_exists($url . ".png")) {
                unlink($url . ".png");
            }
            if (file_exists($url . ".gif")) {
                unlink($url . ".gif");
            }
            break;
        case ".gif":
            if (file_exists($url . ".png")) {
                unlink($url . ".png");
            }
            if (file_exists($url . ".jpg")) {
                unlink($url . ".jpg");
            }
            break;
        case ".png":
            if (file_exists($url . ".jpg")) {
                unlink($url . ".jpg");
            }
            if (file_exists($url . ".gif")) {
                unlink($url . ".gif");
            }
            break;
    }
}

//Function to upload a product picture
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
        //Check if the image has a correct width (480px)
        $tam_img = getimagesize($image);
        $img_width = $tam_img[0];
        $img_height = $tam_img[1];
        $img_width_desired = 420;
        // If the image"s width is greater than 480px, size is readjusted
        if ($img_width > $img_width_desired) {
            $new_img_width = $img_width_desired;
            $new_img_height = ($img_height / $img_width) * $new_img_width;
            $readjusted_img = imagecreatetruecolor($new_img_width, $new_img_height);
            switch ($extension) {
                case ".jpg":
					$img_original = imagecreatefromjpeg($image);
					//Readjusting the new image
                    imagecopyresampled($readjusted_img, $img_original, 0, 0, 0, 0, $new_img_width, $new_img_height, $img_width, $img_height);
                    //Upload the new image to the server
                    $img_name_ext = "../img/product_pictures/" . $productId . $extension;
                    $img_name = "../img/product_pictures/" . $productId;
                    imagejpeg($readjusted_img, $img_name_ext, 100);
                    //Delete duplicated images to avoid repetition
                    delete_image($img_name, ".jpg");
                    break;
                case ".gif":
                    $img_original = imagecreatefromgif($image);
                    imagecopyresampled($readjusted_img, $img_original, 0, 0, 0, 0, $new_img_width, $new_img_height, $img_width, $img_height);
                    $img_name_ext = "../img/product_pictures/" . $productId . $extension;
                    $img_name = "../img/product_pictures/" . $productId;
                    imagegif($readjusted_img, $img_name_ext, 100);
                    delete_image($img_name, ".gif");
                    break;
                case ".png":
                    $img_original = imagecreatefrompng($image);
                    imagecopyresampled($readjusted_img, $img_original, 0, 0, 0, 0, $new_img_width, $new_img_height, $img_width, $img_height);
                    $img_name_ext = "../img/product_pictures/" . $productId . $extension;
                    $img_name = "../img/product_pictures/" . $productId;
                    imagepng($readjusted_img, $img_name_ext, 100);
                    delete_image($img_name, ".png");
                    break;
            }
        } else {
            //Don"t readjust and upload
            $destino = "../img/product_pictures/" . $productId . $extension;
            //Upload picture
            move_uploaded_file($image, $destino) or die("Coulnd't upload image to server");
            //Delete duplicated images to avoid repetition
            $img_name = "../img/product_pictures/" . $productId;
            delete_image($img_name, $extension);
        }
        //Name of picture assigned on the database as a string
        $image = $productId . $extension;
        return $image;
    } else {
        return false;
    }
}
