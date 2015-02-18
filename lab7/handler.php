<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 05.02.15
 * Time: 0:26
 */
include_once('classes/Article.class.php');
include_once('classes/Writer.class.php');

if($_GET['author']!=''){
    $article1 = new Article($_GET['author'],$_GET['title'],$_GET['descr']);
    $article1->printArticleInfo();
}

if($_GET['firstname']!=''){
    $writer1 = new Writer($_GET['firstname'],$_GET['secondname'],$_GET['email']);
    $writer1->printWriterInfo();
}