<?php

namespace braingames\games\Progression;

use function braingames\Engine\run;

function startProgression()
{
    $gameQuestion = 'Write the missing number';
    $array = [];

    for ($i = 0; $i < 3; $i++) {
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
        array_push($array, array("{$numberForUser}", $rightAnswer));
    }
    run($gameQuestion, $array);
}
