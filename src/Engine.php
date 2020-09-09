<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function totalRounds()
{
    $rounds = 3;
    return $rounds;
}

function run($game_description, $expressions_and_answers)
{
    line("Welcome to the Brain Games!");
    $user_name = prompt('May I have your name?');
    line("Hello, {$user_name}!");

    foreach ($expressions_and_answers as [$expression, $right_answer]) {
        line("{$game_description}");
        line($expression);
        //print_r('Подсказка = ' . $right_answer);
        $use_answer = prompt("Your answer");

        if ($use_answer === $right_answer) { // if even, without remainder
            line("Correct!");
        } elseif ($use_answer !== $right_answer) {
            line("'{$use_answer}' is wrong answer ;(. Correct answer was '{$right_answer}'.");
            line("Let's try again, {$user_name}!");
            return;
        }
    }
    line("Congratulations, {$user_name}!");
}
