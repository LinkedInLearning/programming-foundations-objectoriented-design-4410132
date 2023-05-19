<?php

class Chessboard{
  protected $pieces = [];

  public function addPiece(Piece $piece){
    $this->pieces[] = $piece;
  }

  public function print(){
    $board = [];
    for($i = 0; $i < 8; $i++){
      for($j = 0; $j < 8; $j++){
        $board[$i][$j] = ( ($i + $j) % 2 == 0 ) ? '⬜' : '⬛';
      }
    }

    foreach($this->pieces as $piece){
      $board[$piece->x][$piece->y] = $piece->getSymbol();
    }

    foreach($board as $row){
      echo implode($row) . PHP_EOL;
    }

    echo "\n";
  }
}

class Piece{
  protected $color;
  public $x;
  public $y;

  public function __construct($color, $x, $y){
    $this->color = $color;
    $this->x = $x;
    $this->y = $y;
  }

  public function move($to){
    $this->x = substr($to, 0, 1);
    $this->y = substr($to, 1, 1);
  }
}

class King extends Piece{
  public function getSymbol(){
    return ($this->color == 'black') ? '♔ ' : '♚ ';
  }
}

class Queen extends Piece{
  public function getSymbol(){
    return ($this->color == 'black') ? '♕ ' : '♛ ';
  }
}

$chess = new Chessboard();
$kingWhite = new King('white', 0, 3);
$chess->addPiece($kingWhite);

$kingBlack = new King('black', 7, 3);
$chess->addPiece($kingBlack);

$queenWhite = new Queen('white', 0, 4);
$chess->addPiece($queenWhite);
$queenBlack = new Queen('black', 7, 4);
$chess->addPiece($queenBlack);

$chess->print();

$kingWhite->move('13');
$chess->print();
