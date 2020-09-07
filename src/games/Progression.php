<?php

namespace Braingames\games\Progression;

use function Braingames\Engine\run;
use function Braingames\Engine\totalRounds;

/**
 * Game module Prime.php
 * User should enter the missing number of progression
 */
function startProgression()
{
    $game_description = 'Write the missing number';
    $expressions_and_answers = [];

    for ($i = 0; $i < totalRounds(); $i++) {
        $starting_number = mt_rand(1, 5000);
        $random_index_of_hidden_number = mt_rand(0, 9); // which position will be hided
        $progression_step = mt_rand(1, 90); // progression step
        $numbers_array = range($starting_number, $starting_number + ($progression_step * 9), $progression_step);
        $number_for_user = '';

        foreach ($numbers_array as $item) { // print array with hided number
            if ($item === $numbers_array[$random_index_of_hidden_number]) {
                $number_for_user .= '.. ';
                continue;
            }
            $number_for_user .= "{$item} ";
        }
        $right_answer = $numbers_array[$random_index_of_hidden_number];
        $expressions_and_answers [] = array("{$number_for_user}", (string) $right_answer);
    }
    run($game_description, $expressions_and_answers);
}
