<?php


//if ($mysql == false){
//    echo "Ошибка подключения";
//}
//define('DB_DRIVER', 'mysql');
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'register');
//define('DB_USER', 'root');
//define('DB_PASSWORD', '');

//$db = new \PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME , DB_USER , DB_PASSWORD);


$config = [
    'host' => 'localhost',
    'name' => 'register',
    'user' => 'root',
    'password' => '',
    'charset' => 'utf-8',
];

$db = new PDO ('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
$db->query('SET character_set_connection = ' . $config['charset'] . ';');
$db->query('SET character_set_client = ' . $config['charset'] . ';');
$db->query('SET character_set_results = ' . $config['charset'] . ';');
?>