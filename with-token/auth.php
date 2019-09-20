<?php

function auth($token){
    $tokens = array(
        'EXAMPLE-TOKEN'
    );

    if(in_array($token, $tokens)){
        return true;
    } else {
        return false;
    }
}
