<?php

namespace php\project\lvl1\Communications;

use function cli\line;
use function cli\prompt;

function greetings() // greetings and asking username
{
    line('Welcome to the Brain Games!');
    global $name; // global variable for username
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
