<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function isPrime($numberForQuestion)
{
    return ($numberForQuestion % 2 === 0) ? 'yes' : 'no';
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $numberForQuestion = rand(1, 50);
        $rightAnswer = (string) isPrime($numberForQuestion);
        $gameData [] = [$numberForQuestion, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
