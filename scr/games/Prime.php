<?php

namespace braingames\games\Prime;

use function braingames\Engine\run;

function isPrime($number)
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $i = 3;
    $max_factor = (int) sqrt($number);
    while ($i <= $max_factor) {
        if ($number % $i == 0) {
            return false;
        }
        $i += 2;
    }
    return true;
}

function getPrimes($maxNumber)
{
    $primes = [];
    for ($i = 3; $i <= $maxNumber; $i++) {
        if (isPrime($i)) {
            $primes [] = $i;
        }
    }
    return $primes;
}

function startPrime()
{
    $gameQuestion = 'Is this number is prime?';
    $array = [];
    $primeArray = getPrimes(500);

    for ($i = 0; $i < 3; $i++) {
        $numberForUser = mt_rand(1, 500); // number shows to user
        $rightAnswer = in_array($numberForUser, $primeArray); // true or false
        if ($rightAnswer === true) {
            $rightAnswer = 'yes';
        } elseif ($rightAnswer === false) {
            $rightAnswer = 'no';
        }
        array_push($array, array("$numberForUser", $rightAnswer));
    }
    run($gameQuestion, $array);
}
