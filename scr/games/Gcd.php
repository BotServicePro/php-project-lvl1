<?php

namespace braingames\games\Gcd;

use function braingames\Engine\run;

function nodCalculator($n, $m) // nod number calculator
{
    if (!is_numeric($n) || !is_numeric($m)) {
        print_r('Enter only numbers!');
    }
    if ($m > 0) {
        return nodCalculator($m, $n % $m);
    } else {
        return abs($n);
    }
}

function startGcd()
{
    $gameQuestion = 'Write the greatest common divisor of this numbers';
    $array = [];

    for ($i = 0; $i < 3; $i++) {
        $firstNumber = mt_rand(1, 300); // first random number
        $secondNumber = mt_rand(1, 300); // second random number
        $rightAnswer = nodCalculator($firstNumber, $secondNumber);
        array_push($array, array("Numbers {$firstNumber} and {$secondNumber}", $rightAnswer));
    }
    run($gameQuestion, $array);
}
