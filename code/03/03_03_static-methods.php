<?php

class Math{
    public static function add($a, $b){
        return $a + $b;
    }

    public static function power($a, $b){
        return $a ** $b;
    }

    public static function root($a, $b = 2){
        return $a ** (1 / $b);
    }
}

echo Math::add(2, 3) . PHP_EOL;
echo Math::root(9) . PHP_EOL;