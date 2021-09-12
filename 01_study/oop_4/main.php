<?php

require_once __DIR__ . '/Person.php';

$taro = new Person('田中', '太郎');
echo $taro->selfIntroduction();


// require_once __DIR__ . '/Person.php';
// require_once __DIR__ . '/Teacher.php';

// $bob = new User('bob', 21);
// $tom = new User('tom', 22);
// $ken = new User('ken', 23);

// echo $bob->selfIntroduction();
// echo $tom->selfIntroduction();
// echo $ken->selfIntroduction();


//$taro = new Person("田中", "太郎");
//var_dump($taro);
//echo $taro->selfIntroduction();

//echo "\n";

//$jiro = new Teacher('佐藤','次郎');
//var_dump($jiro);
//echo $jiro->selfIntroduction();

$taro = new Teacher('田中', '太郎', 'ネクレボ高等学校');
echo $taro->selfIntroduction();