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
    $game_names_array = [
        ['Calculating numbers: 1', 1],
        ['If number is even: 2', 2],
        ['Greatest common divisor: 3', 3],
        ['If number is prime: 4', 4],
        ['Arithmetic progression: 5', 5],
        ];
    foreach ($game_names_array as [$description , $game_number]) {
        print_r($description . "\n");
    }
    $game_number = (int) prompt('Number');

    if ($game_number === $game_names_array[0][1]) {
        startCalculator();
    } elseif ($game_number === $game_names_array[1][1]) {
        startEven();
    } elseif ($game_number === $game_names_array[2][1]) {
        startGcd();
    } elseif ($game_number === $game_names_array[3][1]) {
        startPrime();
    } elseif ($game_number === $game_names_array[4][1]) {
        startProgression();
    }
}
