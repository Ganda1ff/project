<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
}

require_once 'config.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $pass = $_POST['pass'];
    $avatar = $_FILES['avatar'];
    $login = $_POST['login'];

    if (empty(trim($name))) {
        $_SESSION['message'] = 'Имя не может быть пустым';
        header('Location: settings.php');
        exit();
    }





    $check_login_query = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login_query) > 0) {
        $_SESSION['message'] = 'Пользователь с таким логином уже существует!';
        header('Location: ../profile.php');
        exit;
    }





    if (!empty(trim($pass))) {
        if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*()_+]).{8,}$/', $pass)) {
            $_SESSION['message'] = 'Пароль должен содержать не менее 8 символов, включая заглавные и строчные буквы, цифры и специальные символы';
            header('Location: settings.php');
            exit();
        }

        $pass = md5($pass);
        mysqli_query($connect, "UPDATE `users` SET `pass` = '$pass' WHERE `id` = '{$_SESSION['user']['id']}'");
        $_SESSION['user']['pass'] = $pass;
    }

    if (!empty($avatar['name'])) {
        $path = 'uploads/' . time() . $avatar['name'];
        if (!move_uploaded_file($avatar['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке файла';
            header('Location: settings.php');
            exit();
        }
        mysqli_query($connect, "UPDATE `users` SET `avatar` = '$path' WHERE `id` = '{$_SESSION['user']['id']}'");
        $_SESSION['user']['avatar'] = $path;
    }
    mysqli_query($connect, "UPDATE `users` SET `login` = '$login' WHERE `id` = '{$_SESSION['user']['id']}'");
    $_SESSION['user']['login'] = $login;

    mysqli_query($connect, "UPDATE `users` SET `name` = '$name' WHERE `id` = '{$_SESSION['user']['id']}'");
    $_SESSION['user']['name'] = $name;
    $_SESSION['message'] = 'Профиль успешно обновлен';
    header('Location: ../profile.php');
    exit();
}

?>
