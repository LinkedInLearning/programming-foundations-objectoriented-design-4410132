<?php
interface PieceInterface
{
    function move($to);
}

class Piece
{
    protected $color;
    public $position;
}

class King extends Piece implements PieceInterface
{
    public function move($to)
    {
        // code goes here
    }
}

class Dragon implements PieceInterface
{
    public function move($to)
    {
        // code goes here
    }
}
