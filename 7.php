<?php


function stringLength($string) {
    $length = 0;
    for ($i = 0; isset($string[$i]); $i++) {
        $length++;
    }
    
    return $length;
}