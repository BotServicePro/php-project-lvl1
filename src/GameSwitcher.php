<?php

namespace BrainGames\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\games\Calculator\runGame as calc;
use function BrainGames\games\Even\runGame as even;
use function BrainGames\games\Gcd\rungame as gcd;
use function BrainGames\games\Prime\rungame as prime;
use function BrainGames\games\Progression\rungame as progression;
use function BrainGames\games\ToRoman\rungame as ToRoman;
use function BrainGames\games\ToNumber\rungame as ToNumber;

function gameSwitcher()
{
    line('Please choese number the game you want to play:');
    $listGames = [
        1 => 'brain-calc',
        2 => 'brain-even',
        3 => 'brain-gcd',
        4 => 'brain-prime',
        5 => 'brain-progression',
        6 => 'brain-romanToNumber',
        7 => 'brain-numberToRoman'
    ];

    foreach ($listGames as $number => $name) {
        line("$number) $name");
    }

    $userAnswer =  prompt('Enter game number');
    $choice = array_key_exists($userAnswer, $listGames) ? $listGames[$userAnswer] : null;

    switch ($choice) {
        case 'brain-even':
            even();
            break;
        case 'brain-calc':
            calc();
            break;
        case 'brain-gcd':
            gcd();
            break;
        case 'brain-prime':
            prime();
            break;
        case 'brain-progression':
            progression();
            break;
        case 'brain-numberToRoman':
            ToRoman();
            break;
        case 'brain-romanToNumber':
            ToNumber();
            break;
        default:
            line('Please enter correct game number!');
            gameSwitcher();
            break;
    }
}
