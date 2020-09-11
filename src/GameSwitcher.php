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
    $gameNames = [
        1 => 'Calculating numbers: 1',
        2 => 'If number is even: 2',
        3 => 'Greatest common divisor: 3',
        4 => 'If number is prime: 4',
        5 => 'Arithmetic progression: 5'
    ];
    foreach ($gameNames as $description) {
        print_r($description . "\n");
    }
    $userAnswer = (int) prompt('Write the game number');

    switch ($userAnswer) {
        case '1':
            calc();
            break;
        case '2':
            even();
            break;
        case '3':
            gcd();
            break;
        case '4':
            prime();
            break;
        case '5':
            progression();
            break;
    }
}
