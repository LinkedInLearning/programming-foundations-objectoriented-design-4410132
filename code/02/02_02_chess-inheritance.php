<?php

class Piece
{
    public $color = '';
    public $rank = 0;
    public $file = 0;

    public function __construct($color, $rank, $file) {
      $this->color = $color;
      $this->rank = $rank;
      $this->file = $file;
    }
}

$piece = new Piece('black', 4, 0);