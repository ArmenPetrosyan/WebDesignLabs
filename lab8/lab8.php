<?php
    require_once('data.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab 8</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="style8.css"/>
</head>
<body>
<form action="action.php" method="post" id="superForm">
    <h3><?=$question?></h3>
    <table>
        <tr>
            <td><input name="vote" id="one" type="radio" value="1" checked/></td>
            <td><label for="one"><?=$alternatives[0]?></label></td>
        </tr>
        <tr>
            <td><input name="vote" id="two" type="radio" value="2"/></td>
            <td><label for="two"><?=$alternatives[1]?></label></td>
        </tr>
        <tr>
            <td><input name="vote" id="three" type="radio" value="3"/></td>
            <td><label for="three"><?=$alternatives[2]?></label></td>
        </tr>
        <tr>
            <td><input name="vote" id="four" type="radio" value="4"/></td>
            <td><label for="four"><?=$alternatives[3]?></label></td>
        </tr>
        <tr>
            <td> <input name="vote" id="five" type="radio" value="5"/></td>
            <td><label for="five"><?=$alternatives[4]?></label></td>
        </tr>
    </table>
    <input type="submit" class="btn" id="submit" value="Проголосовать"/>
    <input type="button"  id="lil" name="clear" value="Очистить файл"/>
    <canvas id="graph" width="200"></canvas>
</form>
<script src="script.js"></script>
</body>
</html>