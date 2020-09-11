<?php

namespace BrainGames\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\games\Calculator\runGame as calc;
use function BrainGames\games\Even\runGame as even;
use function BrainGames\games\Gcd\rungame as gcd;
use function BrainGames\games\Prime\rungame as prime;
use function BrainGames\games\Progression\rungame as progression;

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
        calc();
    } elseif ($gameNumber === $gameNamesArray[1][1]) {
        even();
    } elseif ($gameNumber === $gameNamesArray[2][1]) {
        gcd();
    } elseif ($gameNumber === $gameNamesArray[3][1]) {
        prime();
    } elseif ($gameNumber === $gameNamesArray[4][1]) {
        progression();
    }
}
