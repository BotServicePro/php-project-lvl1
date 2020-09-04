<?php

namespace braingames\games\Calculator;

use function braingames\Engine\run;

function startCalculator()
{
    $gameQuestion = 'What is the result of the expression?';
    $array = [];
    for ($i = 0; $i < 3; $i++) {
        $firstNumber = mt_rand(-5, 50); // first random number
        $secondNumber = mt_rand(-5, 50); // second random number
        $expectedExpression = mt_rand(1, 3); // number of which expression we want
        $expression = '';
        $rightAnswer = '';
        switch ($expectedExpression) {
            case 1:
                $rightAnswer = $firstNumber + $secondNumber;
                $expression = "{$firstNumber} + {$secondNumber}";
                break;
            case 2:
                $rightAnswer = $firstNumber - $secondNumber;
                $expression = "{$firstNumber} - {$secondNumber}";
                break;
            case 3:
                $rightAnswer = $firstNumber * $secondNumber;
                $expression = "{$firstNumber} * {$secondNumber}";
                break;
        }
        array_push($array, array($expression, $rightAnswer));
    }
    run($gameQuestion, $array);
}
