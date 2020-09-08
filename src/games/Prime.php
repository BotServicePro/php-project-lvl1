<?php

namespace BrainGames\games\Prime;

use function BrainGames\games\Engine\run;
use function BrainGames\games\Engine\totalRounds;

const PRIMEDESCRIPTION = 'Is this number is prime?';

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
    $expressions_and_answers = [];
    $prime_array = getPrimes(500);

    for ($i = 0; $i < totalRounds(); $i++) {
        $number_for_user = mt_rand(1, 500); // number shows to user
        $right_answer = in_array($number_for_user, $prime_array); // true or false answer
        if ($right_answer === true) {
            $right_answer = 'yes';
        } elseif ($right_answer === false) {
            $right_answer = 'no';
        }
        $expressions_and_answers [] = array("$number_for_user", (string) $right_answer);
    }
    run(PRIMEDESCRIPTION, $expressions_and_answers);
}
