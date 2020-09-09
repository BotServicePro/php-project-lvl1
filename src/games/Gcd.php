<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\run;
use function BrainGames\Engine\totalRounds;

const GCDDESCRIPTION = 'Write the greatest common divisor of this numbers';

function nodCalculator($firstNumber, $secondNumber) // nod number calculator
{
    if (!is_numeric($firstNumber) || !is_numeric($secondNumber)) {
        print_r('Enter only numbers!');
    }
    if ($secondNumber > 0) {
        return nodCalculator($secondNumber, $firstNumber % $secondNumber);
    } else {
        return abs($firstNumber);
    }
}

function startGcd()
{
    $expressionsAndAnswers = [];

    for ($i = 0; $i < totalRounds(); $i++) {
        $firstNumber = mt_rand(1, 300); // first random number
        $secondNumber = mt_rand(1, 300); // second random number
        $rightAnswer = nodCalculator($firstNumber, $secondNumber);
        $expressionsAndAnswers [] = array("Numbers {$firstNumber} and {$secondNumber}", (string) $rightAnswer);
    }
    run(GCDDESCRIPTION, $expressionsAndAnswers);
}
