<?php
include_once  'db.php';

setcookie('user_id', $user['id'] , time() + 3600 * 24, "/");
$userid = $_COOKIE['user_id'];

$db -> query("INSERT INTO `resultsuser` (`user_id`, `tests_id`, `score`) VALUES( '$userid', '$testID', '$score')");

$_SESSION['test_score'] = 0;
header('Location: /test/coursers.html');


?>