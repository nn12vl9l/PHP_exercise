<?php

$num1 = 3;
$num2 = 4;
$operator = 'addition';

?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>埋め込み</title>
</head>

<body>
    <h1><?php echo <a href= "http://localhost/exercise/03/calc.php?num1=3&num2=4&operator=addition"></a>; ?></h1>
</body>

</html>