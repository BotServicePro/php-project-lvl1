<?php

namespace BrainGames\games\ToRoman;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Enter roman number converted from number';

function toRoman($number)
{
    $map = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    $result = '';
    $number = intval($number);
    foreach ($map as $key => $value) {
        $match = intval($number / $value);
        $result .= str_repeat($key, $match);
        $number = $number % $value;
    }
    return $result;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = mt_rand(1, 3500);
        $romanNumber = toRoman($number);
        $rightAnswer = (string) $number;
        $gameData[] = [$romanNumber, $rightAnswer];
    }
    run(DESCRIPTION, $gameData);
}
