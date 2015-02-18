<meta charset='utf-8'>
<link rel="stylesheet" href="../Styles/style.css"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 15.01.15
 * Time: 21:13
 */

//1 task
function maxPrice($item1,$price1,$item2,$price2,$item3,$price3){
    $maxp = $price1;
    $maxi = $item1;
    if($maxp<$price2){
        $maxp = $price2;
        $maxi = $item2;
    }
    if($maxp<$price3){
        $maxp = $price3;
        $maxi = $item3;
    }
    echo "
       <ul>
        <li>$item1 = $price1</li>
        <li>$item2 = $price2</li>
        <li>$item3 = $price3</li>
       </ul>
    ";
    echo "<p>Max price: \"$maxi\" = $maxp</p>";
}
echo("<h2>Task 1</h2>");
maxPrice("viper",1233,"killa",5555,"bruce",900);
maxPrice("viper",4,"killa",0,"bruce",900);
maxPrice("s4",500,"s860",200,"t566",120);

//2task
function maxqPrice($array){
    $sum = 0;
    foreach($array as $key => $value){
        $sum += $value;
    }
    $absAverage = $sum/count($array);
   printf("<p>Absolute average price = %.2f</p>",$absAverage);

    $tmp = array();
    foreach($array as $key => $val){
        $tmp[$key] = abs($val-$absAverage);
    }
    asort($tmp);
    echo "<p>Real average price: \"".key($tmp)."\" = ".$array[key($tmp)]."</p>";
}
echo("<h2>Task 2</h2>");
$arr = array("s4"=>500,"s860"=>200,"t566"=>120);
print_r($arr);
maxqPrice($arr);

//3task
function checkPass($pas){
    $etalon = "qwerty";

    if($pas == $etalon){
        return "Пароль верный";
    }
    return "Пароль неправильный - $pas";
}

echo("<h2>Task 3-4</h2>");
print(checkPass("Vasya"));

//5task
function factorial($num){
    $sum = $num;
    while($num>1){
        $sum *= --$num;
    }
    return $sum;
}

echo("<h2>Task 5 Factorial loop</h2>");
print(factorial(5));


//6task
function factorial_r($num){
    return $num?$num*factorial_r($num-1):1;
}

echo("<h2>Task 6 Factorial recur</h2>");
print(factorial_r(5));
