<?php
    //include __DIR__ .'/bd.php';

    if(!empty($_FILES['file'])){
        $file = $_FILES['file'];
        $name = $file['name'];//в этой переменной имя фото
        $pathFile = __DIR__ .'/ava/'.$name; //путь к файлу полный(папка img + имя файла)

        if(!move_uploaded_file($file['tmp_name'], $pathFile)){
            echo "Файл не загружен";
        }


        $mysql = new mysqli('localhost', 'root' , '' , 'register');

        //$id = $mysql -> query("SELECT `id` FROM `users`");
        //$data = $mysql -> prepare("INSERT INTO `users` (`photo`) VALUES('$name')");
        //$data -> execute([$name]);
        //!!!!$data = $mysql -> query("UPDATE users SET photo= '$name' WHERE `login` = `login[0]`");
        $login = $_COOKIE['login'];
        $data = $mysql -> query("UPDATE users SET photo= '$name' WHERE `login` = '$login'");
        //setcookie('photo', $user['photo'] , time() + 3600 * 24, "/");
        $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login'");

        $user = $result->fetch_assoc();
        setcookie('photo', $user['photo'] , time() + 3600 * 24, "/");
        //var_dump($user);

        //$mysql -> close();
        
    }
    header('Location: personal.php');

    //$data = $mysql -> query("UPDATE users SET photo= '$name'"); РАБОТАЕТ ДЛЯ ВСЕХ СТОЛБЦОВ
?>

