<?php

namespace php\project\lvl1\Secondgamelogic;

use function cli\line;
use function cli\prompt;

function startSecondGame()
{
    global $userName; // global variable which was made in Communications
    $rightAnswer = '';
    line('What is the result of the expression?');

    for ($winCounter = 0, $wrongCounter = 0; $winCounter < 3;) {
        $firstNumber = mt_rand(-5, 50); // first random number
        $secondNumber = mt_rand(-5, 50); // second random number
        $expectedExpression = mt_rand(1, 3); // number of which expression we want
        switch ($expectedExpression) {
            case 1:
                line("Question: {$firstNumber} + {$secondNumber}"); // +
                $rightAnswer = $firstNumber + $secondNumber;
                break;
            case 2:
                line("Question: {$firstNumber} - {$secondNumber}"); // -
                $rightAnswer = $firstNumber - $secondNumber;
                break;
            case 3:
                line("Question: {$firstNumber} * {$secondNumber}"); // *
                $rightAnswer = $firstNumber * $secondNumber;
                break;
        }

        $userAnswer =  (int) prompt("Your answer");

        if ($userAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
            $winCounter++;
        } elseif ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$userName}!");
            $wrongCounter++; // count wrong answers
            $winCounter = 0; // results reset
            return;
        }
        // line("Total wins " . $winCounter); // total wins
        // line("Total lose " . $wrongCounter); // total lose
    }
    line("Congratulations, {$userName}!");
}
