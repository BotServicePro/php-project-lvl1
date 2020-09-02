<?php

namespace php\project\lvl1\Communications;

use function cli\line;
use function cli\prompt;

function greetings() // greetings and asking username
{
    line('Welcome to the Brain Games!');
    global $userName; // global variable for username
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);

    line('Please, write number which game you want to play!');
    line('First game - if number is even: 1');
    line('Second game - calculating numbers: 2');
    line('Third game - greatest common divisor: 3');
    line('Fourth game - arithmetic progression: 4');
    // line('Fifth game, ... : 5');
    line(" ");
    return $userName;
}

function askingName()
{
    line('Welcome to the Brain Games!');
    global $userName; // global variable for username
    $userName = prompt('May I have your name?');
    line("Hello, %s!", $userName);
}
