<?php

namespace php\project\lvl1\Engine;

use function cli\prompt;
use function php\project\lvl1\Communications\greetings;
use function php\project\lvl1\Firstgamelogic\startFirstGame;
use function php\project\lvl1\Secondgamelogic\startSecondGame;
use function php\project\lvl1\Thirdgamelogic\startThirdGame;

//use function php\project\lvl1\Fourthgamelogic\startFourthGame;
//use function php\project\lvl1\Fifthgamelogic\startFifthGame;

function run()
{
    greetings(); // call to greetings in communications.php
    $gameNumber = prompt('Number');

    switch ($gameNumber) {
        case 1:
            echo "You have chosen first game. ";
            startFirstGame();
            break;
        case 2:
            echo "You have chosen second game. ";
            startSecondGame();
            break;
        case 3:
            echo "You have chosen third game. ";
            startThirdGame();
            break;
        case 4:
            echo "You have chosen fourth game. ";
            //startFourthGame();
            break;
        case 5:
            echo "You have chosen fifth game. ";
            //startFifthGame();
            break;
    }
}
