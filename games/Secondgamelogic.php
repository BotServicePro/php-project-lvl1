<?php

namespace php\project\lvl1\Secondgamelogic;

use function cli\line;
use function cli\prompt;

function startSecondGame()
{
    global $name; // global variable which was made in Communications
    $rightAnswer = '';

    for ($winCounter = 0, $wrongCounter = 0; $winCounter < 3;) {
        $firstNumber = rand(-5, 50); // first random number
        $secondNumber = rand(-5, 50); // second random number
        $expectedExpression = rand(1, 3); // number of which expression we want

        line('What is the result of the expression?');

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
            line("{$userAnswer} is wrong answer ;(. Correct answer was '{$rightAnswer}.");
            line("Let's try again, {$name}");
            $wrongCounter++; // count wrong answers
            $winCounter = 0; // results reset
        }
        // line("Total wins " . $winCounter); // total wins
        // line("Total lose " . $wrongCounter); // total lose
    }
    line("Congratulations, {$name}");
}
