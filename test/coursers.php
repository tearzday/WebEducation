<?php


    if (!isset($_COOKIE['name']) && !isset($_COOKIE['login']) && !isset($_COOKIE['email']))   
    {   
        header('Location: /enter.html');
    }

    else{
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>WebEducation</title> 
        <link rel="stylesheet" href="CSS/courserstyle.css">


        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header__nav">
                <nav>
                    <ul>
                        <li>WebEducation</li>
                    </ul>
                </nav>
            </div>
            <div class="header__right">
                <a href="../personal/personal.php">Личный кабинет</a>
            </div>
        </header>
        <main>
            <!--1-ая строка карточек-->
            <div class="row1">
                <!--Карточка 1-->
                <a href="courser/BasicHTML/basichtml0.html"><article class="BasicsHTML">
                    <div class="text">
                        <h2>Основы HTML</h2>
                     </div>         
                    <img src="IMG/Card1.svg" alt="Изображение первой карточки">
                </article></a>

                <!--Карточка 2--> 
                <a href="courser/BasicCSS/basiccss1.html"><article class="BasicsCSS">
                    <div class="text">
                        <h2>Основы CSS</h2>
                    </div>
                    <img src="IMG/Card2.svg" alt="Изображение второй карточки">
                </article></a>
            </div>



            <!--2-ая строка карточек-->
            <div class="row2"> <!--Название классов изменить-->
                <!--Карточка 3-->
                <a href="courser/BasicHTMLCSS2/basichtmlcss1.html"><article class="BasicsHTMLCSS1">
                    <div class="text">
                        <h2>Основы HTML<br>
                            И CSS</h2>
                            <p>Часть 1</p>
                    </div>
                    <img src="IMG/Card3.svg" alt="Изображение третей карточки">
                </article></a>

                <!--Карточка 4-->
                <a href="../personal/personal.html"><article class="BasicsHTMLCSS2">
                    <div class="text">
                        <h2>Основы HTML<br>
                            И CSS</h2>
                            <p>Часть 2</p>
                    </div>
                    <img src="IMG/Card4.svg" alt="Изображение четвертой карточки">
                </article></a>


            </div>
        </main>
    </body>

</html>

<?php } ?>