<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDSAMOUNT;

const DESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function isPrime($numberForQuestion)
{
    if ($numberForQuestion % 2 === 0) {
        return 'yes';
    } elseif ($numberForQuestion % 2 !== 0) {
        return 'no';
    }
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDSAMOUNT; $i++) {
        $numberForQuestion = rand(1, 50);
        $rightAnswer = isPrime($numberForQuestion);
        $gameData [] = [$numberForQuestion, (string) $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
