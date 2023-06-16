<?php

    $connect = mysqli_connect('localhost', 'root', 'root', 'bd');

    if (!$connect) {
        die('Ошибка подключения к БД');
    }
    ?>