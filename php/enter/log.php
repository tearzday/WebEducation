<?php
// считываем введеные значения и очищаем их от ненужных символов
    $login = filter_var( trim($_POST['login']), FILTER_SANITIZE_URL);
    $password = filter_var( trim($_POST['password']), FILTER_SANITIZE_URL);


//засекречивание пароля
$password = md5($password."ddsadwqdq");

//подключение к бд
    $mysql = new mysqli('localhost', 'root' , '' , 'register');
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' ");

    $user = $result->fetch_assoc();
    if (count ($user) == 0){
        echo "Такой пользователь не найден";
        exit();
    }
    else{
       setcookie('user', $user['name'] , time() + 5, "/");
    }

    $mysql -> close();

//переадресация

header('Location: /test/coursers.html')
?>