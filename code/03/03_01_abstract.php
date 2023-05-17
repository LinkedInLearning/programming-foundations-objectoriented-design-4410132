<?php

abstract class Piece
{
    protected $color;
    public $position;

    public function move($to)
    {
        if (! $this->isMoveAllowed($to) ) {
            return;
        }

        $this->position = $to;
    }

    abstract public function isMoveAllowed($to);
}

class King extends Piece
{
    public function isMoveAllowed($to)
    {
        // logic here
        return true;
    }
}

class Queen extends Piece
{
    public function isMoveAllowed($to)
    {
        // logic here
        return true;
    }
}

