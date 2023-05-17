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

$robot1 = new Robot();
$robot1->color = 'red';

$robot2 = new Robot();
$robot2->color = 'blue';

$robot1->move();

print_r($robot1);
print_r($robot2);

