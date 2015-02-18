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

do{
    $currentPrice+=$currentPrice*($currentPercent/100);
    $currentPercent+=$currentPercent+3.5;
    if($currentPrice<=150){
        print("$currentPrice<br>");
    }
}while($currentPrice<150);

echo "<table>";
echo "<tr><th>Год</th><th>Цена</th></tr>";
for($i=1;$i<=6;$i++){
    $currentPrice+=$currentPrice*($currentPercent/100);
    $currentPercent+=3.5;
    echo "<tr><td>$i</td><td>$currentPrice</td></tr>";
}
echo "</table>";