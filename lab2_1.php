<meta charset='utf-8'>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 15.01.15
 * Time: 1:03
 */

$item1 = "Lenovo";
$item2 = "Samsung";
$item3 = "Nokia";
$price1 = 100;
$price2 = 123;
$price3 = 99;

echo "
$item1 = $price1<br>
$item2 = $price2<br>
$item3 = $price3<br>
";

$average = ($price1+$price2+$price3)/3;
printf("<hr width='150' align='left'><strong>Средняя цена = %.0f</strong>",$average);

