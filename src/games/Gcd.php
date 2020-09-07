<?php

namespace braingames\games\Gcd;

use function braingames\Engine\run;
use function braingames\Engine\totalRounds;

/**
 * Game module Gcd.php
 * User should enter the greatest common divisor of two numbers
 */
function nodCalculator($first_number, $second_number) // nod number calculator
{
    if (!is_numeric($first_number) || !is_numeric($second_number)) {
        print_r('Enter only numbers!');
    }
    if ($second_number > 0) {
        return nodCalculator($second_number, $first_number % $second_number);
    } else {
        return abs($first_number);
    }
}

function startGcd()
{
    $game_description = 'Write the greatest common divisor of this numbers';
    $expressions_and_answers = [];

    for ($i = 0; $i < totalRounds(); $i++) {
        $first_number = mt_rand(1, 300); // first random number
        $second_number = mt_rand(1, 300); // second random number
        $right_answer = nodCalculator($first_number, $second_number);
        $expressions_and_answers [] = array("Numbers {$first_number} and {$second_number}", (string) $right_answer);
    }
    run($game_description, $expressions_and_answers);
}
