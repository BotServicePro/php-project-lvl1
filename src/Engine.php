<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS = 3;

function run($description, $gameData)
{
    line("Welcome to the Brain Games!");
    $userName = prompt('May I have your name?');
    line("Hello, {$userName}!");

    foreach ($gameData as [$question, $correctAnswer]) {
        line("{$description}");
        line($question);
        //print_r('Подсказка = ' . $rightAnswer);
        $userAnswer = prompt("Your answer");
        if ($userAnswer !== $correctAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        }
        line("Correct!");
    }
    line("Congratulations, {$userName}!");
}
