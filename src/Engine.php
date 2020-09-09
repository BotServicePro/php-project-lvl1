<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function totalRounds()
{
    return ROUNDS;
}

function run($gameDescription, $expressionsAndAnswers)
{
    line("Welcome to the Brain Games!");
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");

    foreach ($expressionsAndAnswers as [$expression, $rightAnswer]) {
        line("{$gameDescription}");
        line($expression);
        //print_r('Подсказка = ' . $rightAnswer);
        $useAnswer = prompt("Your answer");

        if ($useAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
        } elseif ($useAnswer !== $rightAnswer) {
            line("'{$useAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
