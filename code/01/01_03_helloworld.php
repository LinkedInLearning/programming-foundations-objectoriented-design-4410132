<?php

class Robot
{
  public $color = '';
  public $x = 0;
  public $y = 0;

  function move()
  {
    $this->x = $this->x + 1;
  }
}
