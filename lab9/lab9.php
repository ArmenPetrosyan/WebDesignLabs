<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 14.02.15
 * Time: 12:22
 */
error_reporting(~E_WARNING);

function getDayNameUA($day=null){
    switch($day){
        case 1:return "Понеділок";
        case 2:return "Вівторок";
        case 3:return "Середа";
        case 4:return "Четвер";
        case 5:return "П'ятниця";
        case 6:return "Субота";
        case 7:return "Неділя";
    }
    return getDayNameUA(localtime()[6]);
}

function getDateAlternative($timestamp=null){
    if($timestamp){
        $dayUa = getDayNameUA(localtime($timestamp,true)['tm_wday']);
        $date = date('d.m.Y',$timestamp);
    }else{
        $dayUa = getDayNameUA(localtime()[6]);
        $date = date('d.m.Y');
    }
    return "$dayUa $date";
}
//////////////////////////////////
$date = date('d.m.y');
$time = date('h:m');
$dateUa = getDateAlternative();
$today = '';
if(isset($_REQUEST['getDay'])){
    $today = "Сьогодні ".getDayNameUA()."!";
}
/////////////////////////////////
echo "
    <ol>
        <li>$date</li>
        <li>$dateUa</li>
        <li>
            $date $time
            <br/>
            <button onclick=\"location='lab9.php?getDay=true'\">
                Який сьогодні день
            </button>
            <p>$today</p>

        </li>
    </ol>
";