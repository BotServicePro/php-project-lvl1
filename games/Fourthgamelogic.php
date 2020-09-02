<?php

namespace php\project\lvl1\Fourthgamelogic;

use function cli\line;
use function cli\prompt;

function startFourthGame()
{
    global $userName; // global variable which was made in Communications
    line('Write the missing number');

    for ($winCounter = 0; $winCounter < 3;) {
        $startingNumber = mt_rand(1, 5000);
        $randomIndexOfHiddenNumber = mt_rand(0, 9); // which position will be hided
        $progressionStep = mt_rand(1, 90); // progression step
        $numbersArray = range($startingNumber, $startingNumber + ($progressionStep * 9), $progressionStep);

        foreach ($numbersArray as $item) { // print array with hided number
            if ($item === $numbersArray[$randomIndexOfHiddenNumber]) {
                echo '.. ';
                continue;
            }
            echo $item . ' ';
        }

        $rightAnswer = $numbersArray[$randomIndexOfHiddenNumber];
        line("");
        $userAnswer =  (int) prompt("Your answer");
        if ($userAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
            $winCounter++;
        } elseif ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
