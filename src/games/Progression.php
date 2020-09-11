<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS;

const DESCRIPTION = 'Write the missing number';

function startProgression()
{
    $expressionsAndAnswers = [];

    for ($i = 0; $i < ROUNDS; $i++) {
        $startingNumber = mt_rand(1, 5000);
        $randomIndexOfHiddenNumber = mt_rand(0, 9); // which position will be hided
        $progressionStep = mt_rand(1, 90); // progression step
        $numbersArray = range($startingNumber, $startingNumber + ($progressionStep * 9), $progressionStep);
        $numberForUser = '';

        foreach ($numbersArray as $item) { // print array with hided number
            if ($item === $numbersArray[$randomIndexOfHiddenNumber]) {
                $numberForUser .= '.. ';
                continue;
            }
            $numberForUser .= "{$item} ";
        }
        $rightAnswer = $numbersArray[$randomIndexOfHiddenNumber];
        $expressionsAndAnswers [] = array("{$numberForUser}", (string) $rightAnswer);
    }
    run(DESCRIPTION, $expressionsAndAnswers);
}
