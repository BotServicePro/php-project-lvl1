<?php

namespace BrainGames\games\Gcd;

use function BrainGames\games\Engine\run;
use function BrainGames\games\Engine\totalRounds;

const GCDDESCRIPTION = 'Write the greatest common divisor of this numbers';

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
    $expressions_and_answers = [];

    for ($i = 0; $i < totalRounds(); $i++) {
        $first_number = mt_rand(1, 300); // first random number
        $second_number = mt_rand(1, 300); // second random number
        $right_answer = nodCalculator($first_number, $second_number);
        $expressions_and_answers [] = array("Numbers {$first_number} and {$second_number}", (string) $right_answer);
    }
    run(GCDDESCRIPTION, $expressions_and_answers);
}
