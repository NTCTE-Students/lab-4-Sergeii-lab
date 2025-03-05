<?php


function average($array) {
    $sum = array_sum($array);
    $count = count($array);
    return $sum / $count;
}