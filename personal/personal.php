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
                        <li><a href="../test/coursers.html">Темы обучения</a></li>
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
                    <img src="../Image/icons/profil.svg" alt="Фотография ученика">
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
                                <p>Статус</p>
                                <p>Ссылка</p>
                            </div>
                            <div class="test__rowOne__Two">
                                <p>Основы CSS</p>
                                <p>Статус</p>
                                <p>Ссылка</p>
                            </div>
                        </div>
                        <div class="test__rowTwo">
                            <div class="test__rowTwo__One">
                                <p>Основы HTML и CSS. <span class="tema">
                                    <br> Часть 1</span></p>
                                <p>Статус</p>
                                <p>Ссылка</p>
                            </div>
                            <div class="test__rowTwo__Two">
                                <p>Основы HTML и CSS.<span class="tema">
                                    <br> Часть 2</span></p>
                                <p>Статус</p>
                                <p>Ссылка</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    
</body>
</html>