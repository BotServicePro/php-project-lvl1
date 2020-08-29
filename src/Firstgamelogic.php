<?php

namespace php\project\lvl1\Firstgamelogic;

use function cli\line;
use function cli\prompt;

function run()
{
    $rightAnswer = '';
    line('Welcome to the Brain Games №1');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');
    for ($winCounter = 0; $winCounter < 3;) {
        $numberForQuestion = rand(1, 50); // Загаданное число
        line("Question: {$numberForQuestion}");
        $userAnswer = prompt("Your answer");
        if ($numberForQuestion % 2 === 0) { // если число четное, без остатка
            $rightAnswer = 'yes';
        } elseif ($numberForQuestion % 2 !== 0) {
            $rightAnswer = 'no';
        }
        if ($userAnswer === $rightAnswer) {
            line("Correct!");
            $winCounter++;
        }
        if ($userAnswer !== $rightAnswer) {
            line("{$userAnswer} is wrong answer ;(. Correct answer was {$rightAnswer}.");
            line("Let's try again, {$name}");
            $winCounter = 0; // сбрасываем результаты
        }
        // line("Total " . $winCounter); // показывать количество успешных ответов
    }
    line("Congratulations, {$name}!");
}
