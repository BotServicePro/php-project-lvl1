<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;
use function cli\line;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = "What is the result of the expression?";

function calculate($operator, $firstNumber, $secondNumber)
{
    switch ($operator) {
        case "+":
            return $firstNumber + $secondNumber;
        case "-":
            return $firstNumber - $secondNumber;
        case "*":
            return $firstNumber * $secondNumber;
        default:
            line("Error - nonexistent symbol");
    }
}

function runGame()
{
    $operators = ["-", "+", "*"];
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = mt_rand(1, 15);
        $secondNumber = mt_rand(1, 15);
        $operator = $operators[array_rand($operators, 1)]; // temp symbol
        $expression = "$firstNumber $operator $secondNumber";
        $correctAnswer = calculate($operator, $firstNumber, $secondNumber);
        $gameData [] = [$expression, (string) $correctAnswer];
    }
    run(DESCRIPTION, $gameData);
}
