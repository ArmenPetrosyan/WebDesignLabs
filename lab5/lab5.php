<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 21.01.15
 * Time: 0:58
 */

$currency = ['usd'=>20.2,'eur'=>25];

function exchanger($sum,$to){
    global $currency;
    switch(strtolower($to)){
        case 'usd':;
        case '$':return printf('%.3f',$sum/$currency['usd']);
        case 'eur':return printf('%.3f',$sum/$currency['eur']);
    }
    return false;
}

$goods = [
    'Очки'=>1050,
    'Шляпа'=>1500,
    'Туфли'=>1200,
    'Рубашка'=>800,
    'Галстук'=>600,
    'Часы'=>25000,
    'Телефон'=>16000
];
?>

<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="../Styles/style.css"/>
</head>
<body>
<table>
    <tr>
        <th rowspan="2">Название</th>
        <th colspan="3">Цена</th>
    </tr>
    <tr>
        <th>UAH</th>
        <th>USD</th>
        <th>EUR</th>
    </tr>
    <?php foreach($goods as $name=>$price): ?>
    <tr>
        <td><?=$name?></td>
        <td><?=$price?></td>
        <td><?=exchanger($price,'$')?></td>
        <td><?=exchanger($price,'eur')?></td>
    </tr>
    <?php endforeach ?>
</table>
<form action="lab5.php" method="get">
    <label for="email_input">Введите адрес електронной почты</label>
    <input type="text" name="email_input"/>
    <input type="submit" value="Проверить"/>
</form>
</body>

<?php
    require_once('support.php');
?>