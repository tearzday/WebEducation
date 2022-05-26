<?php
$mysql = new mysqli('localhost', 'root' , '' , 'register');

if ($mysql == false){
    echo "Ошибка подключения";
}
?>