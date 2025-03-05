<?php

function secondLargest($array) {
    rsort($array);
    foreach ($array as $value) {
        if ($value != $array[0]) {
            return $value;
        }
    }
    return null;
}