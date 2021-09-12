<?php

require_once __DIR__ . '/User.php';

$bob = new User('bob', 21);
$tom = new User('tom', 22);
$ken = new User('ken', 23);

echo $bob->selfIntroduction();
echo $tom->selfIntroduction();
echo $ken->selfIntroduction();

