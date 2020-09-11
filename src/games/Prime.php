<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDSAMOUNT;

const DESCRIPTION = 'Is this number is prime?';

function isPrime($number)
{
    if ($number == 2) {
        return true;
    }
    if ($number % 2 == 0) {
        return false;
    }
    $i = 3;
    $maxFactor = (int) sqrt($number);
    while ($i <= $maxFactor) {
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

function runGame()
{
    $gameData = [];
    $primeNumbers = getPrimes(500);
    for ($i = 0; $i < ROUNDSAMOUNT; $i++) {
        $numberForUser = mt_rand(1, 500); // number shows to user
        $rightAnswer = in_array($numberForUser, $primeNumbers); // true or false answer
        $rightAnswer = ($rightAnswer === true) ? 'yes' : 'no';
        $gameData [] = ["$numberForUser", (string) $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
