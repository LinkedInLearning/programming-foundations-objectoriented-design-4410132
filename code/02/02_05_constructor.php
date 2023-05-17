<?php

class Piece
{
    public $color = '';
    public $rank = 0;
    public $file = 0;
}

class King extends Piece
{
    function move()
    {
        // code goes here
    }
}

class Queen extends Piece
{
    function move()
    {
        // code goes here
    }
}

class Bishop extends Piece
{
    function move()
    {
        // code goes here
    }
}

$king = new King();
print_r($king);
