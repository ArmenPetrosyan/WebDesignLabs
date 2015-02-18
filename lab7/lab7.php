<meta charset="utf-8"/>
<link rel="stylesheet" href="../lab10/styles/animate.css"/>
<link rel="stylesheet" href="../Styles/style.css"/>
<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 22.01.15
 * Time: 12:24
 */

?>

<body>
<h2>Article</h2>
<div id="article" class="animated">
    <form action="handler.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="author">Author</label>
                </td>
                <td>
                    <input type="text" name="author"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="title">Title</label>
                </td>
                <td>
                    <input type="text" name="title"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="descr">Description</label>
                </td>
                <td>
                    <input type="text" name="descr"/>
                </td>
            </tr>
        </table>
        <input type="submit" name="article_submit" id="article_submit"/>
    </form>
</div>
<h2>Person</h2>
<div id="person">
    <form action="handler.php" method="get">
        <table>
            <tr>
                <td>
                    <label for="firstname">First name</label>
                </td>
                <td>
                    <input type="text" name="firstname"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="secondname">Second name</label>
                </td>
                <td>
                    <input type="text" name="secondname"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email</label>
                </td>
                <td>
                    <input type="email" name="email"/>
                </td>
            </tr>
        </table>
        <input type="submit" name="person_submit" id="person_submit" value="Создать"/>
    </form>
</div>
<form action="handler2.php">
    <input type="text" name="nick"/> Никнейм <br>
    <input type="text" name="fio"/> ФИО <br>
    <input type="text" name="year"/> Год <br>
    <input type="text" name="sp"/> Семейное положение <br>
    <input type="text" name="work"/> Работа <br>
    <input type="submit" value="Отправить"/>
</form>
<script src="../scripts/jquery-2.1.1.min.js"></script>
<script src="../scripts/code7.js"></script>
</body>
