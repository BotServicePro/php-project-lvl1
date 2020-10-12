<?php

namespace BrainGames\games\Even;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION =  'Answer "yes" if the number is even, otherwise answer "no".';

function isEven($number)
{
    return $number % 2 === 0;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = mt_rand(1, 50);
        $rightAnswer = isEven($number) ? 'yes' : 'no';
        $gameData[] = [$number, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
