<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 05.02.15
 * Time: 9:46
 */

class Person {
    var $nickname;
    var $fio;
    var $year;

    function Person($n,$f,$y){
        $this->nickname = $n;
        $this->fio = $f;
        $this->year = $y;
    }

    function show(){
        echo "Nick: $this->nickname <br>";
        echo "Fio: $this->fio <br>";
        echo "Year: $this->year <br>";
    }
} 