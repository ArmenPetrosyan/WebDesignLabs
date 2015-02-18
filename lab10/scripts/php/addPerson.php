<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 15.02.15
 * Time: 3:07
 */

require_once('DBEngine.class.php');

if(!$dbe->addEntity(
    $_REQUEST['table'],
    $_REQUEST['fname'],
    $_REQUEST['patro'],
    $_REQUEST['lname'],
    $_REQUEST['email'],
    $_REQUEST['tel'],
    $_REQUEST['city'],
    $_REQUEST['country']
)){
    echo $dbe->conn->error;
};