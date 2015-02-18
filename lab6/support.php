<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 21.01.15
 * Time: 9:06
 */
define('PASSWORD','qwerty');

if(isset($_POST['password'])){
    if($_POST['password'] == PASSWORD){
        print('Верный пароль');
    }else{
        print('НЕПРАВИЛЬНО');
    }
}elseif(count($_POST)){;
    echo "<h2>ФИО: ".$_POST['pib']."</h2>";
    echo "<h2>Адрес: ".$_POST['addr']."</h2>";
    echo "<h2>Email: ".$_POST['email']."</h2>";
    echo "<h2>Пароль: ".$_POST['passw']."</h2>";
}