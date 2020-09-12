<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

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
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstNumber = mt_rand(1, 15);
        $secondNumber = mt_rand(1, 15);
        $tempOperator = $operators[array_rand($operators, 1)]; // temp symbol
        $expression = "$firstNumber $tempOperator $secondNumber";
        $correctAnswer = calculate($tempOperator, $firstNumber, $secondNumber);
        $gameData [] = [$expression, (string) $correctAnswer];
    }
    run(DESCRIPTION, $gameData);
}
