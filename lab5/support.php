<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 21.01.15
 * Time: 3:17
 */

function checkEmailWithRegexp($email){
    if(trim($email)){
        if(preg_match("/[ ]+/",$email)){
            return 'Пробелы не допустимы';
        }elseif(preg_match("/@{2,}/",$email)){
            return 'Несколько собак недопустимо';
        }elseif(!preg_match("/@/",$email)){
            return 'Где собачка? А?!';
        }elseif(!preg_match("/^[\w]+@/",$email)){
            return 'Не поддерживаемые символы перед @ !';
        }elseif(!preg_match("/@[\w]+\\.[a-z]+$/",$email)){
            return 'Не поддерживаемые (или отсутствуют) символы после @ !';
        }else{
            return "Всё правильно! Домен: ".substr($email,strpos($email,'@')+1);
        }
    }else{
        return 'Ошибка! Пустая строка';
    }
}
$email_str = $_GET['email_input'];

echo checkEmailWithRegexp($email_str);

