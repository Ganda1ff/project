<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ваш профиль</title>
    <link rel="stylesheet" href="src/css/profile.css"> 
    <link rel="stylesheet" href="../src/css/settings.css"> 

    <link type="image/png" sizes="16x16" rel="icon" href="images/favicon.png">

</head>
<body>
<div class="el_logo"><a href="/index.php"></a></div>
    <div class="form_wrap">
    <form>
        <div class="img_wrap">
        <?php 
        if (isset($_SESSION['user']['avatar'])) {
            echo '<img class="user_image" src="' . $_SESSION['user']['avatar'] . '" width="200" alt="">';
        } else {
            echo '<img class="user_image" src="uploads/avatar_not_selected.png" width="200" alt="">';
        }
        ?>
        </div>
        <div class="info_wrap">
        <h2 class="user_name user_info">ВАШЕ ИМЯ<br> <?= $_SESSION['user']['name'] ?></h2>
        <br>
        <h2 class="user_login user_info">ВАШ ЛОГИН<br> <?= $_SESSION['user']['login'] ?></h2>
        <br>
        <a href="#" class="user_email user_info"><h2>ВАШ EMAIL</br><?= $_SESSION['user']['email'] ?></h2></a>
    </div>
        <br>
        <p class="contact">Если у вас возникли какие-либо вопросы, вы можете связаться с нами по этому адресу: <strong><a href="mailto:officialgamestore7@gmail.com">officialgamestore7@gmail.com</a></strong></p>
        <br>
        <div class="buttons_flex">
        <a href="#" class="buttons settings">Настройки</a>
        <br>
        <a href="/index.php" class="buttons">НА ГЛАВНУЮ</a>
        <br>
        <a href="vendor/logout.php" class="buttons">ВЫХОД</a>
        </div>

    </form>


</div>


    
    <div class="settings_wrap">
    <form method="POST" enctype="multipart/form-data" action="vendor/settings.php">    
            <input  class="change_input" type="file" name="avatar">
        <input class="change_input" type="text" placeholder="Придумайте новое имя" name="name" value="<?= $_SESSION['user']['name'] ?>">
        <input  class="change_input" type="password" name="pass" placeholder="Придумайте новый пароль">
        <input  class="change_input" type="text"  placeholder="Придумайте новый логин" name="login">
        <input type="submit"name="submit" value="Сохранить" class="buttons">
        <a href="../profile.php" class="decline">Отмена</a>
</form>
    </div>

    <!-- <div class="footer_div">
    <footer>
        
    <div class="global_footer_flex">
<div class="footer_logo"></div>

<div class="center_block">
<div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">О КОМПАНИИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">КОНТАКТЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">БЛОГ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПОДДЕРЖКА</li>
    </a>
  
</ul>

    </div>

    <div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">ПОДАРОЧНЫЕ КАРТЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ВАКАНСИИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПРЕДЗАКАЗЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ВОЗВРАТ</li>
    </a>

</ul>

    </div>

    <div class="footer_flex">

<ul class="footer_ul">
    <a href="" class="el_a">
        <li class="footer_li">ЛИДЕРЫ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">НОВИНКИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">ПОДБОРКИ</li>
    </a>
    <a href="" class="el_a">
        <li class="footer_li">СКИДКИ</li>
    </a>

</ul>
</div>
    </div>

    <div class="socials">
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
        <a class="socials_images" href="#"></a>
    </div>
</div>

</footer>
</div> -->

    <script src="src/js/settings.js"></script>
</body>
</html>