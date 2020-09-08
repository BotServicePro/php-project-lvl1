<?php

namespace php\project\lvl1\games\GameSwitcher;

use function cli\line;
use function cli\prompt;
use function php\project\lvl1\games\Calculator\startCalculator;
use function php\project\lvl1\games\Even\startEven;
use function php\project\lvl1\games\Gcd\startGcd;
use function php\project\lvl1\games\Prime\startPrime;
use function php\project\lvl1\games\Progression\startProgression;

/**
 * Module GameSwitcher.php
 * Allows user to choese game he want to play
 */

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
