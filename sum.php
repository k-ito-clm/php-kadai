<?php

//課題１ 引数に数値を指定して実行すると、数値を2倍にして返す関数
function double($num){
 $result = $num * 2;
 return $result;
}
echo double(10);

//課題２ $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数
function sum($a,$b){
 $result2 = $a + $b;
 return $result2;
}
echo sum(2,10);

//課題３ $arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数
function multi($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}
echo multi(array(1, 3, 5 ,7, 9));


//課題４ 配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
function max_array($arr){
 // とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
   if($max_number < $a){
     $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array(array(6, 3, 10, 1));
 
//課題５
$str = "<h1>テスト</h1>";
echo strip_tags($str);

$members = array("A","B","C");
array_push($members,"D","E");
print_r($members);

$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
//配列を結合する
$array = array_merge($array1, $array2, $array3);
print_r($array);

echo time()."\n";

echo  mktime()."\n";

echo date('Y/m/d')."\n";
