<?php

namespace php\project\lvl1\Thirdgamelogic;

use function cli\line;
use function cli\prompt;

function nodCalculator($n, $m) // nod number calculator
{
    if (!is_numeric($n) || !is_numeric($m)) {
        print_r('Enter only numbers!');
    }
    if ($m > 0) {
        return nodCalculator($m, $n % $m);
    } else {
        return abs($n);
    }
}

function startThirdGame()
{
    global $userName; // global variable which was made in Communications
    line('Enter the greatest common divisor');
    for ($winCounter = 0, $wrongCounter = 0; $winCounter < 3;) {
        $firstNumber = mt_rand(1, 300); // first random number
        $secondNumber = mt_rand(1, 300); // second random number

        // guarantee generated even numbers
        for ($i = 0; $firstNumber % 2 !== 0 || $secondNumber % 2 !== 0; $i++) {
            $firstNumber = mt_rand(1, 500); // first random number
            $secondNumber = mt_rand(1, 500); // first random number
        }

        line("Numbers {$firstNumber} and {$secondNumber}");
        $rightAnswer = nodCalculator($firstNumber, $secondNumber);
        echo 'подсказка - ' . $rightAnswer;
        $userAnswer =  (int) prompt("Your answer");

        ////////////////////////////
        if ($userAnswer === $rightAnswer) { // if even, without remainder
            line("Correct!");
            $winCounter++;
        } elseif ($userAnswer !== $rightAnswer) {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rightAnswer}'.");
            line("Let's try again, {$userName}!");
            $wrongCounter++; // count wrong answers
            $winCounter = 0; // results reset
        }
        // line("Total wins " . $winCounter); // total wins
        // line("Total lose " . $wrongCounter); // total lose
    }
    line("Congratulations, {$userName}!");
}
