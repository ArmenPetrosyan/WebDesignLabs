<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 22.01.15
 * Time: 14:54
 */

class Article{
    private  $author;
    private  $title;
    private  $description ;


    function __construct($author = 'Andrew',$title ='Tales of glory',$description = 'Great fiction story'){
        $this->author = $author;
        $this->description = $description;
        $this->title = $title;
    }

    function printArticleInfo(){
        echo "Автор: $this->author <br>
        Название: $this->title <br>
        Описание: $this->description <br>";
    }
}
