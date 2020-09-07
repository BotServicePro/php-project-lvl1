<?php

namespace Braingames\games\Calculator;

use function Braingames\Engine\run;
use function Braingames\Engine\totalRounds;

/**
 * Game module Calculator.php
 * Contains -, +, * expressions which should be calculated by user
 */
function countPlus($first_number, $second_number) // +
{
    return $first_number + $second_number;
}

function countMinus($first_number, $second_number) // -
{
    return $first_number - $second_number;
}

function countMultiply($first_number, $second_number) // *
{
    return $first_number * $second_number;
}

function startCalculator()
{
    $game_description = 'What is the result of the expression?';
    $expressions_and_answers = [];
    for ($i = 0; $i < totalRounds(); $i++) {
        $first_number = mt_rand(1, 15); // first random number
        $second_number = mt_rand(1, 15); // second random number
        $expression = '';
        $right_answer = '';
        $expressions_type_array = [
            ["-"],
            ["+"],
            ["*"],
        ];

        switch (array_rand($expressions_type_array)) {
            case 0:
                $right_answer = countMinus($first_number, $second_number);
                $expression = "{$first_number} - {$second_number}";
                break;
            case 1:
                $right_answer = countPlus($first_number, $second_number);
                $expression = "{$first_number} + {$second_number}";
                break;
            case 2:
                $right_answer = countMultiply($first_number, $second_number);
                $expression = "{$first_number} * {$second_number}";
                break;
        }
        $expressions_and_answers [] =  array($expression, (string) $right_answer);
    }
    run($game_description, $expressions_and_answers);
}
