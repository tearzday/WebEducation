<?php
       setcookie('name', $user['name'] , time() - 3600 * 24, "/");
       setcookie('login', $user['login'] , time() - 3600 * 24, "/");
       setcookie('email', $user['email'] , time() - 3600 * 24, "/");
       setcookie('photo', $user['photo'] , time() - 3600 * 24, "/");

       header('Location: /')
?>