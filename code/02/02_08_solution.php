<?php

class Piece
{
    protected $color = '';
    protected $rank = 0;
    protected $file = 0;

    public function __construct($color, $rank, $file) {
      $this->color = $color;
      $this->rank = $rank;
      $this->file = $file;
    }
}

class King extends Piece
{
    function move($direction)
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

$kingBlack = new King('black', 4, 0);
$kingWhite = new King('white', 5, 7);

