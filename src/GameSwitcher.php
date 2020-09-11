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
    line('Please choese the game you want to play:');
    $gameNamesArray = ['Calculating numbers', 'If number is even', 'Greatest common divisor',
        'If number is prime', 'Arithmetic progression'];
    foreach ($gameNamesArray as $description) {
        print_r($description . "\n");
    }
    $userAnswer = (string) prompt('Write game name');

    switch ($userAnswer) {
        case 'Calculating numbers':
            calc();
            break;
        case 'If number is even':
            even();
            break;
        case 'Greatest common divisor':
            gcd();
            break;
        case 'If number is prime':
            prime();
            break;
        case 'Arithmetic progression':
            progression();
            break;
    }
}
