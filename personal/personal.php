<?php
    $mysql = new mysqli('localhost', 'root' , '' , 'register');
    
    $userid = $_COOKIE['user_id'];

    $testScore = $mysql -> query("SELECT tests_id FROM `resultsuser` WHERE user_id = $userid");

    $testScoreUsers = $testScore->fetch_assoc();
    //var_dump( $testScoreUsers);

    if (count ($testScoreUsers) == 0){
        echo "Такой пользователь не найден";
        exit();
    }
    else{
       setcookie('test_id', $user['test_id'] , time() + 3600 * 24, "/");
       setcookie('score', $user['score'] , time() + 3600 * 24, "/");
        //var_dump($_COOKIE['test_id']);

       //var_dump( $userid); //нужно решать!
       //setcookie('id', $user['id'] , time() + 3600 * 24, "/");
       //var_dump($login);
    }

?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>WebEducation</title>
    
        <meta name="Author" content="tearzday">
    
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="../Style/reset.css">
        <link rel="stylesheet" href="personal.css">
    </head>
<body>
    
    <div class="wrapper">
        <div class="header">
            <div class="header__nav">
                <nav>
                    <ul>
                        <li><a href="../test/coursers.php">Темы обучения</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header__right">
                <a href="exit.php">Выход</a>
            </div>
        </div>
        <div class="container">
            <div class="body">
                <div class="body__left">
                    <img src="ava/<?=$_COOKIE['photo']?>" alt="Фотография ученика">
                    <form action="addPhoto.php" method="POST" enctype="multipart/form-data" id="form_send_file">
                        <!--<input type="file" name="file">
                        <input type="submit" value="Загрузить" name="set_avatar"> -->
                        <input onchange="document.getElementById('form_send_file').submit()" style="z-index: -1;" type="file" id="file" name="file" value="Выбрать файл" class="input-file">
                        <label for="file" class="btn btn-tertiary js-labelFile">
                            <i class="icon fa fa-check"></i>
                            <span class="js-fileName">Загрузить аватарку</span>
                        </label>
                    </form>
                    <ul>
                        <li>Имя: <?=$_COOKIE['name']?></li>
                        <li>Логин: <?=$_COOKIE['login']?></li>
                        <li>Почта: <?=$_COOKIE['email']?></li>
                    </ul>
                </div>
                <div class="body__right">
                    <h2>Статистика прохождения курса</h2>
                    <div class="body__test">
                        <div class="test__rowOne">
                            <div class="test__rowOne__One">
                                <p>Основы HTML</p>
                                <p>
                                   Результат теста: 8/10
                                </p>
                            </div>
                            <div class="test__rowOne__Two">
                                <p>Основы CSS</p>
                                <p></p>
                                <p>
                                   Результат теста: 9/10
                                </p>
                            </div>
                        </div>
                        <div class="test__rowTwo">
                            <div class="test__rowTwo__One">
                                <p>Основы HTML и CSS. <span class="tema">
                                    <br> Часть 1</span></p>
                                <p></p>
                                <p>
                                   Результат теста: 7/10
                                </p>
                            </div>
                            <div class="test__rowTwo__Two">
                                <p>Основы HTML и CSS.<span class="tema">
                                    <br> Часть 2</span></p>
                                <p></p>
                                <p>
                                   Результат теста: 10/10
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>