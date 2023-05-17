<?php

class Chessboard
{
    private static $instance = null;
    public $foo = 0;

    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    // prevent from creating new instances from outside
    private function __construct()
    {
    }



}

$chess = Chessboard::getInstance();
$chess2 = Chessboard::getInstance();

$chess->foo = 3;

echo $chess->foo . PHP_EOL;
echo $chess2->foo . PHP_EOL;
