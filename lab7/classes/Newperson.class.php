<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 05.02.15
 * Time: 9:50
 */
require_once('Person.class.php');

class Newperson extends Person {
    var $sp;
    var $workplace;

    function Newperson($n,$f,$y,$sp,$wp){
        Person::Person($n,$f,$y);
        $this->sp = $sp;
        $this->workplace = $wp;
    }

    function show(){
        Person::show();
        echo "SP: $this->sp <br>";
        echo "Work: $this->workplace <br>";
    }

} 