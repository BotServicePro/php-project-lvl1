<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDSAMOUNT;

const DESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function runGame()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDSAMOUNT; $i++) {
        $numberForQuestion = rand(1, 50); // random number
        $rightAnswer = '';
        if ($numberForQuestion % 2 === 0) { // if even, without remainder
            $rightAnswer = 'yes';
        } elseif ($numberForQuestion % 2 !== 0) {
            $rightAnswer = 'no';
        }
        $gameData [] = array($numberForQuestion, (string) $rightAnswer);
    }
    run(DESCRIPTION, $gameData);
}
