<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDSAMOUNT;

const DESCRIPTION = 'Write the missing number';

function runGame()
{
    $gameData = [];

    for ($i = 0; $i < ROUNDSAMOUNT; $i++) {
        $startingNumber = mt_rand(1, 5000);
        $randomIndexOfHiddenNumber = mt_rand(0, 9); // which position will be hided
        $progressionStep = mt_rand(1, 90); // progression step
        $numbers = range($startingNumber, $startingNumber + ($progressionStep * 9), $progressionStep);
        $numberForUser = '';

        foreach ($numbers as $item) { // print array with hided number
            if ($item === $numbers[$randomIndexOfHiddenNumber]) {
                $numberForUser .= '.. ';
                continue;
            }
            $numberForUser .= "$item ";
        }
        $rightAnswer = $numbers[$randomIndexOfHiddenNumber];
        $gameData [] = ["$numberForUser", (string) $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
