<?php

namespace braingames\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function braingames\games\Calculator\startCalculator;
use function braingames\games\Even\startEven;
use function braingames\games\Gcd\startGcd;
use function braingames\games\Prime\startPrime;
use function braingames\games\Progression\startProgression;

function startChoese()
{
    line('Please enter the game number you want to play!');
    line('Calculating numbers: 1');
    line('If number is even: 2');
    line('Greatest common divisor: 3');
    line('If number is prime: 4');
    line('Arithmetic progression: 5');
    $gameNumber = (int) prompt('Number');

    if ($gameNumber === 1) {
        startCalculator();
    } elseif ($gameNumber === 2) {
        startEven();
    } elseif ($gameNumber === 3) {
        startGcd();
    } elseif ($gameNumber === 4) {
        startPrime();
    } elseif ($gameNumber === 5) {
        startProgression();
    }
}
