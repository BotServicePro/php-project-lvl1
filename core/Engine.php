<?php

namespace php\project\lvl1\Engine;

use function cli\line;
use function cli\prompt;
use function php\project\lvl1\Communications\greetings;
use function php\project\lvl1\Firstgamelogic\startFirstGame;
use function php\project\lvl1\Secondgamelogic\startSecondGame;

//use function php\project\lvl1\Thirdgamelogic\startThirdGame;
//use function php\project\lvl1\Fourthgamelogic\startFourthGame;
//use function php\project\lvl1\Fifthgamelogic\startFifthGame;

function run()
{
    greetings(); // call to greetings
    line('Please, write number which game you want to play!');
    line('First game - if number is even: 1');
    line('Second game - calculating numbers: 2');
    // line('Third game, ... : 3');
    // line('Fourth game, ... : 4');
    // line('Fifth game, ... : 5');
    $gameNumber = prompt('Number');

    switch ($gameNumber) {
        case 1:
            echo "You have chosen {$gameNumber}. ";
            startFirstGame();
            break;
        case 2:
            echo "You have chosen {$gameNumber}. ";
            startSecondGame();
            break;
        case 3:
            echo "You have chosen {$gameNumber}. ";
            //startThirdGame();
            break;
        case 4:
            echo "You have chosen {$gameNumber}. ";
            //startFourthGame();
            break;
        case 5:
            echo "You have chosen {$gameNumber}. ";
            //startFifthGame();
            break;
    }
}
