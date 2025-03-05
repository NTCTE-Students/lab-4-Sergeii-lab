<?php
function isPalindrome($string) {
    $cleanedString = strtolower(str_replace(' ', '', $string));
    
    return $cleanedString === strrev($cleanedString);
}

$input = "А роза упала на лапу Азора";
if (isPalindrome($input)) {
    echo "Строка является палиндромом.";
} else {
    echo "Строка не является палиндромом.";
}
