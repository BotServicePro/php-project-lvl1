<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS;

const DESCRIPTION = "What is the result of the expression?";

function calculate($expressionType, $firstNumber, $secondNumber)
{
    switch ($expressionType) {
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
    $expressionsAndAnswers = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $firstNumber = mt_rand(1, 15); // first random number
        $secondNumber = mt_rand(1, 15); // second random number
        $operator = ["-", "+", "*"];
        $tempOperator = $operator[array_rand($operator, 1)]; // temp symbol
        $expression = "{$firstNumber} {$tempOperator} {$secondNumber}";
        $correctAnswer = (string) calculate($tempOperator, $firstNumber, $secondNumber);
        $expressionsAndAnswers [] = [$expression, $correctAnswer];
    }
    run(DESCRIPTION, $expressionsAndAnswers);
}
