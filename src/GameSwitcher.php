<?php

namespace BrainGames\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\games\Calculator\startCalculator;
use function BrainGames\games\Even\startEven;
use function BrainGames\games\Gcd\startGcd;
use function BrainGames\games\Prime\startPrime;
use function BrainGames\games\Progression\startProgression;

function gameChoese()
{
    line('Please enter the game number you want to play!');
    $gameNamesArray = [
        ['Calculating numbers: 1', 1],
        ['If number is even: 2', 2],
        ['Greatest common divisor: 3', 3],
        ['If number is prime: 4', 4],
        ['Arithmetic progression: 5', 5],
        ];
    foreach ($gameNamesArray as [$description , $gameNumber]) {
        print_r($description . "\n");
    }
    $gameNumber = (int) prompt('Number');

    if ($gameNumber === $gameNamesArray[0][1]) {
        startCalculator();
    } elseif ($gameNumber === $gameNamesArray[1][1]) {
        startEven();
    } elseif ($gameNumber === $gameNamesArray[2][1]) {
        startGcd();
    } elseif ($gameNumber === $gameNamesArray[3][1]) {
        startPrime();
    } elseif ($gameNumber === $gameNamesArray[4][1]) {
        startProgression();
    }
}
