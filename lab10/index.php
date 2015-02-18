<?php
    require_once('scripts/php/DBEngine.class.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Работаем с базой данных</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="styles/animate.css"/>
    <link rel="stylesheet" href="styles/style.css"/>
</head>
<body>
<header>
    <h1>Лабораторная работа #10</h1>
    <span class="editSwitch-title">режим <br>редактирования</span>
    <div id="editSwitch" >
        <div class="element"" ></div>
    </div>
    <div id="search">
        <input type="text" placeholder="Поиск по имени"/>
    </div>
</header>
<section id="section1 ">
    <aside class="add">
        <form >
            <div class="item">
                <label for="firstname">Имя</label>
                <input type="text" required="required" name="firstname"/>
            </div>
            <div class="item">
                <label for="patronymic">Отчество</label>
                <input type="text" required="required" name="patronymic"/>
            </div>
            <div class="item">
                <label for="lastname">Фамилия</label>
                <input type="text" required="required" name="lastname"/>
            </div>
            <div class="item">
                <label for="email">Мыло</label>
                <input type="email" name="email"/>
            </div>
            <div class="item">
                <label for="tel">Телефон</label>
                <input type="tel" name="tel"/>
            </div>
            <div class="item">
                <label for="city">Город</label>
                <input type="text" name="city"/>
            </div>
            <div class="item">
                <label for="country">Страна</label>
                <input type="text" name="country"/>
            </div>
            <div class="item">
                <input type="button" id="addBtn" value="+ Добавить"/>
            </div>
        </form>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Aut debitis delectus dicta dignissimos, facere impedit nulla obcaecati officia officiis
            porro qui quibusdam reiciendis, saepe, sed sunt tempore vitae voluptates voluptatum!
        </p>
    </aside>
    <section id="content">
        <table>
            <tr>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Фамилия</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Город</th>
                <th>Страна</th>
            </tr>
            <?php $res = $dbe->getAllData('personal'); while($row = $res->fetch_assoc()): ?>
               <tr>
                   <?php foreach($row as $key=>$val):?>
                       <td contenteditable="true"><?=$val?></td>
                   <?php endforeach; ?>
                   <td id="manage">
                       <div class="delete"></div>
                       <div class="edit"></div>
                   </td>
               </tr>
            <?php endwhile; ?>
        </table>
    </section>
</section>
<script src="scripts/jquery-2.1.1.min.js"></script>
<script src="scripts/modal.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>