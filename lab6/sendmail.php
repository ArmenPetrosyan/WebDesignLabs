<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 21.01.15
 * Time: 15:04
 */

if(preg_match("/[\w.]+@[\w.]+\.[a-zA-Z]+$/",$_POST['to'])){
    $to = $_POST['to'];
    $subject = $_POST['subject'];
    $msg = $_POST['message'];
    if(mail($to,$subject,$msg))
        echo 'письмо отправлено';
}else{
    echo "wrong email";
}