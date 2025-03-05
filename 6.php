<?php

function sumDigits($number) {
    $digits = str_split((string)$number);
    
    return array_sum($digits);
}