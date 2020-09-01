<?php

namespace php\project\lvl1\Communications;

use function cli\line;
use function cli\prompt;

function greetings() // приветствие и спрос имени
{
    line('Welcome to the Brain Games!');
    global $name; // задаем глобальную переменную с именем юзера
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    return $name;
}
