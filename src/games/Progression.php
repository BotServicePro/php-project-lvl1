<?php

namespace BrainGames\games\Progression;

use function BrainGames\Engine\run;

use const BrainGames\Engine\ROUNDS_COUNT;

const DESCRIPTION = 'Write the missing number';

function makeProgression($start, $step, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        if ($i < $length) {
            $progression[$i] = $start + $step * $i;
        }
    }
    return $progression;
}

function runGame()
{
    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $length = 10;
        $start = mt_rand(1, 100);
        $indexOfHiddenElement = mt_rand(0, $length - 1);
        $step = mt_rand(2, 10);
        $progression = makeProgression($start, $step, $length);
        $correctAnswer = (string) $progression[$indexOfHiddenElement];
        $editedProgression = str_ireplace($progression[$indexOfHiddenElement], '..', $progression);
        $question = implode(' ', $editedProgression);
        $gameData[] = [$question, $correctAnswer];
    }
    run(DESCRIPTION, $gameData);
}
