<?php

namespace php\project\lvl1\Fifthgamelogic;

use function cli\line;
use function cli\prompt;

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

function startFifthGame()
{
    global $userName; // global variable which was made in Communications
    line('Answer "yes" if given number is prime. Otherwise answer "no".');

    $primeArray = getPrimes(500);

    for ($winCounter = 0; $winCounter < 3;) {
        $numberForUser = mt_rand(1, 500); // number shows to user
        line("{$numberForUser}");
        $rightAnswer = in_array($numberForUser, $primeArray); // true or false
        $userAnswer =  prompt("Your answer");
        if ($userAnswer === 'yes') {
            $userAnswer = true;
        } else {
            $userAnswer = false;
        }

        if ($userAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
            $winCounter++;
        } elseif ($userAnswer !== $rightAnswer) {
            line("Answer is wrong ;(.");
            line("Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
