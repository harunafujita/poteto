<?php
namespace TechAcademy\RPG;

require_once 'index2.php';
require_once 'index3.php';

use TechAcademy\RPG\characters\Hero;

class Game {
    static function start() {
        $hero = new Hero();
        $slime_A = new \TechAcademy\RPG\characters\Slime('A');
        $slime_A->attack($hero);
        $hero->attack($slime_A);
        Hero::description();
        characters\Slime::description();
    }
}

Game::start();