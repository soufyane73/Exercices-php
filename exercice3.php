<?php
require 'exercice1.php';

function Factorial($n) {
    if ($n < 0) {
        return "Undefined for negative numbers";
    } elseif ($n == 0 || $n == 1) {
        return 1;
    } else {
        $fact = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fact *= $i;
        }
        return $fact;
    }
}
function checkIfPalindrome($x) {
    if($x == reverseString1($x)) {
    return true;
    } else {
        return false;
    }
}
if (checkIfPalindrome("radar")) {
    echo "\n it is a palindrome.";
} else {
    echo "\n not a palindrome.";
}

?>