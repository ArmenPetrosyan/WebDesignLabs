<meta charset='utf-8'>
<link rel="stylesheet" href="Styles/style.css"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 15.01.15
 * Time: 1:23
 */

$item1 = "Lenovo";
$item2 = "Samsung";
$item3 = "Nokia";
$price1 = 100;
$price2 = 123;
$price3 = 99;

?>
<table id="price">
    <tr>
        <td>Товар</td>
        <th><?php echo $item1 ?></th>
        <th><?php echo $item2 ?></th>
        <th><?php echo $item3 ?></th>
    </tr>
    <tr>
        <td>Цена</td>
        <td><?php echo $price1." USD" ?></td>
        <td><?php echo $price2." USD" ?></td>
        <td><?php echo $price3." USD" ?></td>
    </tr>
</table>

<?
$maxPrice = $price1;
$maxItem = $item1;
if($maxPrice<$price2){
    $maxPrice = $price2;
    $maxItem = $item2;
}elseif($maxPrice<$price3){
    $maxPrice = $price3;
    $maxItem = $item3;
}
echo "<h3>Максимальная цена у $maxItem = $maxPrice</h3>";

$minPrice = $price1;
$minItem = $item1;

if($minPrice>$price2){
    $minPrice = $price2;
    $minItem = $item2;
}
if($minPrice>$price3){
    $minPrice = $price3;
    $minItem = $item3;
}
echo "<h3>Минимальная цена у $minItem = $minPrice</h3>";