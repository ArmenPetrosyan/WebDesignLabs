<meta charset="utf-8"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 05.02.15
 * Time: 9:44
 */
require_once('classes/Newperson.class.php');

$pers = new Newperson($_GET['nick'],$_GET['fio'],$_GET['year'],$_GET['sp'],$_GET['work']);
$pers->show();
