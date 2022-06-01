<?php
// считываем введеные значения и очищаем их от ненужных символов
    $login = filter_var( trim($_POST['login']), FILTER_SANITIZE_URL);
    $name = filter_var( trim($_POST['name']), FILTER_SANITIZE_URL);
    $email = filter_var( trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = filter_var( trim($_POST['password']), FILTER_SANITIZE_URL);
    $photo = 'profil.svg';

//проверка на допустимую длинну
    if(mb_strlen($login) < 5 || mb_strlen($login) > 90){
        echo "Недопустимая длинна логина";
        exit();
    } 
    else if(mb_strlen($name) < 1 || mb_strlen($name) > 40){
        echo "Недопустимая длинна имени";
        exit();
    }
   // else if(mb_strlen($email) < 1 || mb_strlen($email) > 40){
    //    echo "Недопустимая длинна почты";
    //    exit();
   // }
    else if(mb_strlen($password) < 1 || mb_strlen($password) > 40){
        echo "Недопустимая длинна пароля";
        exit();
    }

//засекречивание пароля
    $password = md5($password."ddsadwqdq");

//подключение к бд
    $mysql = new mysqli('localhost', 'root' , '' , 'register');
    $mysql -> query("INSERT INTO `users` (`login`, `name`, `email`, `password` , `photo`) VALUES('$login', '$name', '$email', '$password' , '$photo')");

    $mysql -> close();

//переадресация

header('Location: /enter.html')
?>