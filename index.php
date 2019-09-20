<?php
header('Content-Type: application/json');
$url = "https://api.example.com/random-image/"; //The URL that the image is held in

/*
    The images should be held in:
    https://api.example.com/random-image/img/
*/

    $directory = "img";
    $images = glob($directory . "/*");
    shuffle($images);

    foreach($images as $image)
    {
        echo "{
        \"image\": \"$url/$image\",
        \"name\": \"$image\"
        }";
        return;
    } 
    ?>