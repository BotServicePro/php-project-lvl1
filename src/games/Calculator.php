<?php

namespace BrainGames\games\Calculator;

use function BrainGames\Engine\run;
use function BrainGames\Engine\totalRounds;

const CALCDESCRIPTION = "What is the result of the expression?";

function rightAnswerCalculator($expressionType, $firstNumber, $secondNumber)
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
    for ($i = 0; $i < totalRounds(); $i++) {
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
        $correctAnswer = (string) rightAnswerCalculator($tempExpressionType, $firstNumber, $secondNumber);
        $expressionsAndAnswers [] = [$expression, $correctAnswer];
    }
    run(CALCDESCRIPTION, $expressionsAndAnswers);
}
