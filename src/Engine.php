<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function totalRounds()
{
    return ROUNDS;
}

function run($description, $data)
{
    line("Welcome to the Brain Games!");
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");

    foreach ($data as [$question, $correctAnswer]) {
        line("{$description}");
        line($question);
        //print_r('Подсказка = ' . $rightAnswer);
        $useAnswer = prompt("Your answer");
        if ($useAnswer !== $correctAnswer) {
            line("'{$useAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$userName}!");
}
