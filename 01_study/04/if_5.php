<?php

// どちらのテストも80点以上:合格
// どちらかのテストが50点以上:追試
// 2つの条件を満たさない場合:不合格

$score_1 = 30;
$score_2 = 30;


if($score_1 >= 80 && $score_2 >= 80){
    echo '合格';
}elseif($score_1 >= 50 || $score_2 >= 50){
    echo '追試';
}else{
    echo '不合格';
}