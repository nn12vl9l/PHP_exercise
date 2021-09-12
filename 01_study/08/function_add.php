<?php


// (aとbを受け取って)足し算する関数
// ($a, $b)は引数
function add ($a=1, $b=1)
{
    $sum = $a + $b;
    return $sum;
}

echo add();

var_dump(add());


// function add($a, $b)
// {
//     $sum = $a + $b;
//     return $sum;
// }

// echo add(2, 3) . '<br>';

echo '<hr>';

function getCircleArea($radius)
{
    return $radius * $radius * pi();
}

echo getCircleArea(5);
