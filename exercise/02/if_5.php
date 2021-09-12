<?php

$num =97;

for ($i = 2; $i < $num; $i++) {
    if ($num % $i == 0) {
        echo $num . ' は 素数ではありません';
        break;
    } else {
        echo $num . ' は 素数です';
    break;
    }
}
