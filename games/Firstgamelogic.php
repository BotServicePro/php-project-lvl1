<?php

namespace php\project\lvl1\Firstgamelogic;

use function cli\line;
use function cli\prompt;

function startFirstGame()
{
    global $userName; // global variable which was made in Communications
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
