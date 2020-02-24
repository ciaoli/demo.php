<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
  
$num = 5;
function twotimes($num){
    return $num * 2;
}

echo twotimes($num);
echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
  
$a = 8;
$b = 5;
 function sum($a, $b){
     return $a + $b;
 }
echo sum($a, $b);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。

$arr = array(1,3,5,7,9);

function total_product($arr){
    $total = 1;
    foreach ($arr as $item) {
        $total *= $item;
    }
    return $total;
}

echo  total_product($arr) ."\n";

//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。
  
function max_array($arr){

 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
         $max_number = $a;
     }
 }

 return $max_number;
 }
 echo max_array(array(1,3,5,7,9));
 echo "\n";
 
//5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください
 
//strip_tags
 
 $str = "<h1>strip_tags</h1>"
    . "<p>striptags</p>";
    
 echo strip_tags($str) ."\n";
 
//array push
 
 $stack = array("blue", "black");
 array_push($stack, "red","silver");
 print_r($stack) ."\n";
 
//array_merge
 
 $array1 = ["USA", "UK"];
 $array2 = ["Canada", "French", "Germany"];
 $array3 = ["Japan", "Korea", "China"];
 
 $array = array_merge($array1, $array2, $array3);
 
 print_r($array) ."\n";
 
//time,mktime
 
 $date =time();
 echo $date ."\n";
 
 echo date("Y/m/d H:i:s",mktime(12,5,2,3,4,2016)) ."\n";
 
//date
 echo date("Y-m-d H:i:s"). "\n";
 
 