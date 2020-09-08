<?php

namespace BrainGames\games\Even;

use function BrainGames\games\Engine\run;
use function BrainGames\games\Engine\totalRounds;

const EVENDESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function startEven()
{
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
    run(EVENDESCRIPTION, $expressions_and_answers);
}
