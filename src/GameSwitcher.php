<?php

namespace BrainGames\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function BrainGames\games\Calculator\runGame as calc;
use function BrainGames\games\Even\runGame as even;
use function BrainGames\games\Gcd\rungame as gcd;
use function BrainGames\games\Prime\rungame as prime;
use function BrainGames\games\Progression\rungame as progression;

function gameSwitcher()
{
    line('Please choese number the game you want to play:');
    $listGames = [
        1 => 'brain-calc',
        2 => 'brain-even',
        3 => 'brain-gcd',
        4 => 'brain-prime',
        5 => 'brain-progression'
    ];

    foreach ($listGames as $number => $name) {
        line("$number) $name");
    }

    $answer =  prompt('Enter game number');
    if ($answer !== "1" && $answer !== "2" && $answer !== "3" && $answer !== "4" && $answer !== "5") {
        echo 'Please enter correct game number!';
        line(' ');
        return;
    }

    switch ($listGames[$answer]) {
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
    }
}
