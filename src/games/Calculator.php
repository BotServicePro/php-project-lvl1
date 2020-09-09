<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;
use function BrainGames\Engine\totalRounds;

const CALCDESCRIPTION = "What is the result of the expression?";

function countPlus($firstNumber, $secondNumber) // +
{
    return $firstNumber + $secondNumber;
}

function countMinus($firstNumber, $secondNumber) // -
{
    return $firstNumber - $secondNumber;
}

function countMultiply($firstNumber, $secondNumber) // *
{
    return $firstNumber * $secondNumber;
}

function startCalculator()
{
    $expressionsAndAnswers = [];
    for ($i = 0; $i < totalRounds(); $i++) {
        $firstNumber = mt_rand(1, 15); // first random number
        $secondNumber = mt_rand(1, 15); // second random number
        $expression = '';
        $rightAnswer = '';
        $expressionsTypeArray = [
            ["-"],
            ["+"],
            ["*"],
        ];

        switch (array_rand($expressionsTypeArray)) {
            case 0:
                $rightAnswer = countMinus($firstNumber, $secondNumber);
                $expression = "{$firstNumber} - {$secondNumber}";
                break;
            case 1:
                $rightAnswer = countPlus($firstNumber, $secondNumber);
                $expression = "{$firstNumber} + {$secondNumber}";
                break;
            case 2:
                $rightAnswer = countMultiply($firstNumber, $secondNumber);
                $expression = "{$firstNumber} * {$secondNumber}";
                break;
        }
        $expressionsAndAnswers [] =  array($expression, (string) $rightAnswer);
    }
    run(CALCDESCRIPTION, $expressionsAndAnswers);
}
