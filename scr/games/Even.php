<?php

namespace braingames\games\Even;

use function braingames\Engine\run;

function startEven()
{
    $gameQuestion = 'Answer "yes" if the number is even, otherwise answer "no".';
    $array = [];

    for ($i = 0; $i < 3; $i++) {
        $numberForQuestion = rand(1, 50); // random number
        $rightAnswer = '';
        if ($numberForQuestion % 2 === 0) { // if even, without remainder
            $rightAnswer = 'yes';
        } elseif ($numberForQuestion % 2 !== 0) {
            $rightAnswer = 'no';
        }
        array_push($array, array($numberForQuestion, $rightAnswer));
    }
    run($gameQuestion, $array);
}
