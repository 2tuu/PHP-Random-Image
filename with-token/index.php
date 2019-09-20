<?php

include('./auth.php');
header('Content-Type: application/json');

$headers = apache_request_headers();
$a = $headers['AUTHORIZATION']; //Token
$url = "https://api.example.com/random-image/";

//echo "Token: $a\n";

if(auth($a)){

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

} else {
    echo "{
        \"image\": \"INVALID TOKEN"
        }";
}
?>