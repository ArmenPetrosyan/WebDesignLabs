<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 13.02.15
 * Time: 2:16
 */

require_once('vote.class.php');
$handler = new VoteHandler();
if(isset($_GET['rm'])){
    if($handler->rmFile()){
        return 'Файл успешно удален';
    }
}else{
    echo json_encode($handler->getValues());
}