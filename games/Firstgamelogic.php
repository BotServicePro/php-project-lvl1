<?php

namespace php\project\lvl1\Firstgamelogic;

use function cli\line;
use function cli\prompt;

function startFirstGame()
{
    global $name; // глобальная переменная значение которой было задано в Comunnications
    $rightAnswer = '';
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($winCounter = 0, $wrongCounter = 0; $winCounter < 3;) {
        $numberForQuestion = rand(1, 50); // random number
        line("Question: {$numberForQuestion}");
        $userAnswer = prompt("Your answer");
        if ($numberForQuestion % 2 === 0) { // if even, without remainder
            $rightAnswer = 'yes';
        } elseif ($numberForQuestion % 2 !== 0) {
            $rightAnswer = 'no';
        }
        if ($userAnswer === $rightAnswer) {
            line("Correct!");
            $winCounter++;
        }
        if ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$name}");
            $wrongCounter++; // count wrong answers
            $winCounter = 0; // results reset
        }
        // line("Total wins " . $winCounter); // total wins
        // line("Total lose " . $wrongCounter); // total lose
    }
    line("Congratulations, {$name}!");
}
