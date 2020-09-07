<?php

namespace braingames\games\Even;

use function braingames\games\Engine\run;
use function braingames\games\Engine\totalRounds;

/**
 * Game module Even.php
 * User should answer "yes" if number is even, "no" if number is not even
 */

function startEven()
{
    $game_description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $expressions_and_answers = [];

    for ($i = 0; $i < totalRounds(); $i++) {
        $number_for_question = rand(1, 50); // random number
        $right_answer = '';
        if ($number_for_question % 2 === 0) { // if even, without remainder
            $right_answer = 'yes';
        } elseif ($number_for_question % 2 !== 0) {
            $right_answer = 'no';
        }
        $expressions_and_answers [] = array($number_for_question, (string) $right_answer);
    }
    run($game_description, $expressions_and_answers);
}
