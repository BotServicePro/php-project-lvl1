<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;
use const BrainGames\Engine\ROUNDS;

const EVENDESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function startEven()
{
    $expressionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS; $i++) {
        $numberForQuestion = rand(1, 50); // random number
        $rightAnswer = '';
        if ($numberForQuestion % 2 === 0) { // if even, without remainder
            $rightAnswer = 'yes';
        } elseif ($numberForQuestion % 2 !== 0) {
            $rightAnswer = 'no';
        }
        $expressionsAndAnswers [] = array($numberForQuestion, (string) $rightAnswer);
    }
    run(EVENDESCRIPTION, $expressionsAndAnswers);
}
