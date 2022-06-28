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
       setcookie('name', $user['name'] , time() + 3600 * 24, "/");
       setcookie('login', $user['login'] , time() + 3600 * 24, "/");
       setcookie('email', $user['email'] , time() + 3600 * 24, "/");
       setcookie('photo', $user['photo'] , time() + 3600 * 24, "/");
       setcookie('user_id', $user['id'] , time() + 3600 * 24, "/");
       //var_dump( $userid); //нужно решать!
       //setcookie('id', $user['id'] , time() + 3600 * 24, "/");
       //var_dump($login);
    }


    $mysql -> close();

//переадресация

header('Location: /test/coursers.php')
?>