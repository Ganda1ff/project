<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация/Вход</title>
    <link rel="stylesheet" href="../src/css/authorization_style.css">
    <link rel="stylesheet" href="../src/css/normalize.css">
    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

</head>
<body>
    <div class="reg">
<div class="reg_form">
<div class="heading_block">
<h1>СОЗДАЙТЕ АККАУНТ</h1>
<hr>
</div>
            <form action="registration.php" method="POST"  enctype="multipart/form-data">
                <input class="reg_input" type="text" placeholder="ВАШЕ ИМЯ" name="name">

                <input type="file" name="avatar" class="file_upload">

                <input class="reg_input" type="text" placeholder="ПРИДУМАЙТЕ ЛОГИН" name="login">

                <input class="reg_input" type="email" name="email" placeholder="НОМЕР ТЕЛЕФОНА ИЛИ АДРЕС ЭЛ.ПОЧТЫ">

            <input class="reg_input" type="password"  id="password-input"  placeholder="ПАРОЛЬ" name="pass">

            <div class="flex_check"><input type="checkbox" name="show_pass" id="show_pass" class="checkbox"><span class="checkbox_text">ПОКАЗАТЬ ПАРОЛЬ</span></div>

        <button type="submit" name="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button>
        <a href="#" class="reg_a auth_a" >У меня уже есть аккаунт</a>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
</form>
</div>
</div>

<!-- authorization -->

<div class="login">
<div class="login_form">
    <div class="heading_block">
    <h1>ВОЙДИТЕ В АККАУНТ</h1>
    <hr>
</div>
        <form action="login.php" method="POST">
        <input class="login_input" type="text" placeholder="ЛОГИН" name="login">
        <input class="login_input" type="password" placeholder="ПАРОЛЬ" name="pass">
        <button type="submit" class="el_header_button login_button" name="submit">ВОЙТИ</button>

        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

    </form>
    <a href="#" class="a_login auth_a">Если у вас нет аккаунта</a>
</div>
</div>
<script src="../src/js/login.js"></script>
<script src="../src/js/show_pass.js"></script>
</body>
</html>