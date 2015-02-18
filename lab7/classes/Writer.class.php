<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 22.01.15
 * Time: 14:54
 */
class Writer{
    private  $fname;
    private  $sname;
    private  $email ;


    function __construct($fname = 'Andrew',$sname = 'Brendon',$email = 'blackman@gmail.com'){
        $this->fname = $fname;
        $this->email = $email;
        $this->sname = $sname;
    }

    function printWriterInfo(){
        echo "Имя: $this->fname <br>
        Фамилия: $this->sname <br>
        Имэйл: $this->email <br>";
    }
}
