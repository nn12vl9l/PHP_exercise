<?php

$age = 19;

if($age > 20){
    // 条件が真だった時の処理
    echo 'あなたは成人です';
}elseif($age == 20){
    // 1つ目の条件が偽で、2つ目の条件が真だったときの処理
    echo '成人式ですね';
}elseif($age == 19){
    // 1つ目の条件が偽で、2つ目の条件が真だったときの処理
    echo 'もう少しで成人式ですね';
}else {
    // 条件が偽だったときの処理
    echo 'あなたは未成年です';
}