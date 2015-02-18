<meta charset='utf-8'>
<link rel="stylesheet" href="Styles/style.css"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 15.01.15
 * Time: 12:05
 */

$currentPrice = 100;
$currentPercent = 10;

echo "<table>";
echo "<tr><th>Год</th><th>Цена</th></tr>";
for($i=1;$i<=10;$i++){
    $currentPrice+=$currentPrice*($currentPercent/100);
    if($currentPrice>=170){
        $currentPercent-=3.5;
    }else{
        $currentPercent+=3.5;
    }
    echo "<tr><td>$i</td><td>$currentPrice</td></tr>";
}
echo "</table>";

?>
<h2>Lab 3_4</h2>
<?php

$goods = array("Phone4","Phone2","Phone5","Phone1","Phone3");
$goods[5] = "Phone6";
$goods[6] = "Phone7";
echo "Колво элементов = ".count($goods)."<br>";

echo "<h3>Было</h3>";
for($i=0;$i<count($goods);$i++){
    echo "$goods[$i]<br>";
}

sort($goods);
echo "<hr>";
echo "<h3>Стало</h3>";
for($i=0;$i<count($goods);$i++){
    echo "$goods[$i]<br>";
}
?>

<h2>Lab 3_5</h2>
<?php
$array = array("Phone4"=>100,"Phone5"=>200,"Phone3"=>234,"Phone1"=>543,"Phone2"=>1);
echo "Кол-во товаров = ".count($array)."<br>";
echo "<table class='line'>";
foreach($array as $name => $price){
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";

asort($array);
echo "<table class='line'>";
foreach($array as $name => $price){
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";

arsort($array);
echo "<table class='line'>";
foreach($array as $name => $price){
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";

ksort($array);
echo "<table class='line'>";
foreach($array as $name => $price){
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";

krsort($array);
echo "<table class='line'>";
foreach($array as $name => $price){
    echo "<tr><td>$name</td><td>$price</td></tr>";
}
echo "</table>";