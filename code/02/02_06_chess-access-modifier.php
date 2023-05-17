<?php

class Piece
{
    protected $color = '';
    protected $rank = 0;
    protected $file = 0;
}

class King extends Piece
{
    function move($direction)
    {
        if($direction == 'up') {
            $this->file = $this->file + 1;
        }
        if($direction == 'down') {
            $this->file = $this->file - 1;
        }
        if($direction == 'left') {
            $this->rank = $this->rank - 1;
        }
        if($direction == 'right') {
            $this->rank = $this->rank + 1;
        }
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

$kingBlack = new King();
$kingBlack->color = 'black';
$kingBlack->rank = 4;
$kingBlack->file = 8;


$kingWhite = new King();
$kingWhite->color = 'white';
$kingWhite->rank = 5;
$kingWhite->file = 1;

$kingBlack->move("up");
$kingWhite->move("down");

// illegal
$kingWhite->rank = 3; 
$kingWhite->file = 3;