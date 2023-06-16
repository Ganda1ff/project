<?php

    session_start();
    require_once 'config.php';

    $name = $_POST['name'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    
    $check_login_query = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login'");
    if (mysqli_num_rows($check_login_query) > 0) {
        $_SESSION['message'] = 'Пользователь с таким логином уже существует!';
        header('Location: ../index.php');
        exit;
    }

    if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])(?=.*[!@#$%^&*()_+]).{8,}$/', $pass)) {
        $_SESSION['message'] = 'Пароль должен содержать не менее 8 символов, включая заглавные и строчные буквы, цифры и специальные символы';
        header('Location: ../index.php');
        exit();
    }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message'] = 'Введите корректный email адрес';
            header('Location: ../index.php');
            exit();
        }

        $path = 'uploads/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: ../index.php');
        }
        
        $pass = md5($pass);

        mysqli_query($connect, "INSERT INTO `users` (`id`, `name`, `login`, `email`, `pass`, `avatar`) VALUES (NULL, '$name', '$login', '$email', '$pass', '$path')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../profile.php');

?>
