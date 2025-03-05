<?php

function countWords($string) {
    $words = explode(' ', $string);
    
    return count($words);
}