<?php

namespace braingames\Engine;

use function cli\line;
use function cli\prompt;

function run($gameQuestion, $array)
{
    line("Welcome to the Brain Games!");
    global $userName; // global variable for username
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
    for ($winCounter = 0; $winCounter < 3;) {
        line("{$gameQuestion}");
        line("{$array[0][0]}");
        $rightAnswer = $array[0][1];
        //echo "Подсказка {$rightAnswer} ";

        if (is_string($rightAnswer) === true) {
            $userAnswer = (string) prompt("Your answer");
        } elseif (is_integer($rightAnswer) === true) {
            $userAnswer = (int) prompt("Your answer");
        }

        if ($userAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
            unset($array[0][0], $array[0][1]); // delete array with question and answer
            $array = array_values(array_filter($array)); // clear end reindexing
            $winCounter++;
        } elseif ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$userName}!");
            return;
        }
    }
    line("Congratulations, {$userName}!");
}
