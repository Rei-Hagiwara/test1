<?php
$math = [ "A"=>"72", "B"=>"88", "C"=>"72", "D"=>"81", "E"=>"68"];
$physics = [ "A"=>"48", "B"=>"39", "C"=>"91", "D"=>"82", "E"=>"78"];

$mathsum = array_sum($math);  //合計
$physsum = array_sum($physics);

$mathavg = floor( $mathsum / 5 ); //平均
$physavg = floor( $physsum / 5 );

$mathmax = max( $math ); //最大
$physmax = max( $physics );

$mathmin = min( $math ); //最小
$physmin = min( $physics );

//合計が最も高い
$total = [];

foreach( $math as $key => $math_score ){
    $total[ $key ] = $math_score + $physics[$key];
}

$maxPointer = max( $total );

echo $mathavg ."＝数学の平均</br>";
echo $mathmax ."＝数学の最高</br>";
echo $mathmin ."＝数学の最低</br></br>";

echo $physavg ."＝物理の平均</br>";
echo $physmax ."＝物理の最高</br>";
echo $physmin ."＝物理の最低";
?>