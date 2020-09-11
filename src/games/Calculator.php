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

function startCalculator()
{
    $expressionsAndAnswers = [];
    for ($i = 0; $i < ROUNDS; $i++) {
        $firstNumber = mt_rand(1, 15); // first random number
        $secondNumber = mt_rand(1, 15); // second random number
        $expressionsTypeArray = [
            ["-"],
            ["+"],
            ["*"],
        ];
        $tempExpressionType = $expressionsTypeArray
        [array_rand($expressionsTypeArray, 1)]; // temp symbol
        $tempExpressionType = $tempExpressionType[0];
        $expression = "{$firstNumber} {$tempExpressionType} {$secondNumber}";
        $correctAnswer = (string) calculate($tempExpressionType, $firstNumber, $secondNumber);
        $expressionsAndAnswers [] = [$expression, $correctAnswer];
    }
    run(DESCRIPTION, $expressionsAndAnswers);
}
