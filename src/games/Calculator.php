<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDSAMOUNT;

const DESCRIPTION = "What is the result of the expression?";

function calculate($tempOperator, $firstNumber, $secondNumber)
{
    switch ($tempOperator) {
        case "+":
            return $firstNumber + $secondNumber;
        case "-":
            return $firstNumber - $secondNumber;
        case "*":
            return $firstNumber * $secondNumber;
    }
}

function runGame()
{
    $operators = ["-", "+", "*"];
    $gameData = [];

    for ($i = 0; $i < ROUNDSAMOUNT; $i++) {
        $firstNumber = mt_rand(1, 15); // first random number
        $secondNumber = mt_rand(1, 15); // second random number
        $tempOperator = $operators[array_rand($operators, 1)]; // temp symbol
        $expression = "{$firstNumber} {$tempOperator} {$secondNumber}";
        $correctAnswer = (string) calculate($tempOperator, $firstNumber, $secondNumber);
        $gameData [] = [$expression, $correctAnswer];
    }
    run(DESCRIPTION, $gameData);
}
