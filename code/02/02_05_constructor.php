<?php

class Piece
{
    public $color = '';
    public $rank = 0;
    public $file = 0;

    public function __construct($type, $color, $rank, $file) {
      $this->type = $type;
      $this->color = $color;
      $this->rank = $rank;
      $this->file = $file;
    }
}

$piece = new Piece('King', 'black', 4, 0);
