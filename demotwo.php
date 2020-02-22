<?php

$name = "Shoya";

if ($name = "Shoya") {
    echo "私はあなたの名前です。";
   } else {
    echo "私はあなたの名前ではありません。";
   }
echo "\n";


$total = 0;

for ($i = 1; $i <= 10000; $i++) {
    $total += $i;
}
echo $total;
echo "\n";

$fruits = array("apple", "orange", "lemon", "banana", "peach");

foreach($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}

/* for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = 1; $i <= 100; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}