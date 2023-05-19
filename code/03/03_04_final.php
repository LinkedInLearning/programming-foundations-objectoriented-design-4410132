<?php

class Piece
{
    protected $color;
    public $position;

    public function move($to)
    {
        $this->position = $to;
    }
}

final class King extends Piece
{
    public function move($to)
    {
        // logic here
        return true;
    }
}

class Prince extends King
{
    public function move($to)
    {
        // logic here
        return true;
    }
}

