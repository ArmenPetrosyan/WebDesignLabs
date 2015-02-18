<?php
/**
 * Created by PhpStorm.
 * User: Petrosyan
 * Date: 21.01.15
 * Time: 9:03
 */ 

?>

<head>
    <meta charset="utf-8"/>
    <title>LR 6</title>
</head>
<body>
<div>
    <h2>Задание 1</h2>
    <h3>Форма ввода</h3>
    <form method="post" action="support.php">
        <table>
            <tr>
                <td>
                    <label for="pib">ФИО </label>
                </td>
                <td>
                    <input type="text" name="pib" id="pib" placeholder="Vasya"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="addr">Адрес</label>
                </td>
                <td>
                    <input type="text" name="addr" id="addr" placeholder="Alaska"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="mail">Email</label>
                </td>
                <td>
                    <input type="text" name="email" id="mail" placeholder="mail@gmail.com"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="passw">Пароль</label>
                </td>
                <td>
                    <input type="password" name="passw" id="passw" placeholder="qwerty"/>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="right">
                    <input type="submit" value="Отправить"/>
                </td>
            </tr>
        </table>
    </form>
</div>
<div>
    <h2>Задание 2</h2>
    <h3>Проверка пароля</h3>

    <form action="support.php" method="post">
        <label for="password">Проверка пароля</label>
        <input type="password" name="password" id="password"/>
        <button value="Проверить">Проверить</button>
    </form>
</div>
<div>
    <h2>Задание 3</h2>
    <h3>Почтовая форма</h3>

    <form action="sendmail.php" method="post">
        <table class="obnul">
            <tr>
                <td>
                    <label for="to">Кому</label>
                </td>
                <td>
                    <input type="text" name="to"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="subject">От кого</label>
                </td>
                <td>
                    <input type="text" name="subject"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="message">Текст</label>
                </td>
                <td>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="right">
                    <input type="submit" name="mail_ok" id="submit3"/>
                </td>
            </tr>

        </table>
    </form>
</div>
</body>