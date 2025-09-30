<?php

function checkIfPrime($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}


if (checkIfPrime(11)) {
    echo "11 is a prime number.";
} else {
    echo "11 is not a prime number.";
}


?>