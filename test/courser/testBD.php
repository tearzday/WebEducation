<?php
   /*     include_once  'db.php';

    //$db -> query("INSERT INTO `resultsuser` (`user_id`, `tests_id`, `score`) VALUES( '$userid', '$testId', '$score') WHERE user_id = $userid");



    session_start();

    $id = (int) $_GET['id'];
    $userid = $_COOKIE['user_id'];

    $testId = $id;


    if (!isset($_SESSION['test_id']) || $_SESSION['test_id'] != $testId) {
        $_SESSION['test_id'] = $testId;
        $_SESSION['test_score'] = 0;
    }

    $res = $db->query("SELECT * FROM tests WHERE id = {$testId}");
    $row = $res->fetch();
    $testTitle = $row['title'];

    $questionNum = (int) $_POST['q'];
    if (empty($questionNum)) {
        $questionNum = 0;
    }
    $questionNum++;
    $questionStart = $questionNum - 1;

    $res = $db->query("SELECT count(*) AS count FROM questions WHERE test_id = {$testId}");
    $row = $res->fetch();
    $questionCount = $row['count'];

    $answerId = (int) $_POST['answer_id'];
    if (!empty($answerId)) {
        $res = $db->query("SELECT * FROM answers WHERE id = {$answerId}");
        $row = $res->fetch();
        $score = $row['score'];
        $_SESSION['test_score'] += $score;
    }

    $showForm = 0;
    if ($questionCount >= $questionNum) {
        $showForm = 1;

        $res = $db->query("SELECT * FROM questions WHERE test_id = {$testId} LIMIT {$questionStart}, 1");
        $row = $res->fetch();
        $question = $row['question'];
        $questionId = $row['id'];

        $res = $db->query("SELECT * FROM answers WHERE question_id = {$questionId}");
        $answers = $res->fetchAll();
    } else {
        $score = $_SESSION['test_score'];

        $res = $db->query("SELECT * FROM results WHERE test_id = {$testId} AND score_min <= {$score} AND score_max >= {$score}");
        $row = $res->fetch();
        $result = $row['result'];

        $db -> query("INSERT INTO `resultsuser` (`user_id`, `tests_id`, `score`) VALUES( '$userid', '$testId', '$score')");
        //$db -> query("UPDATE `resultsuser` SET score=$score WHERE user_id = $userid AND tests_id = $testId");
        session_destroy();
    }
?>

    }*/


    include_once  'db.php';


    session_start();

    $id = (int) $_GET['id'];
    $userid = $_COOKIE['user_id'];

    $testId = $id;


/*Для проверки пользвателя на то , что такой существует или нет*/
    $check = $db -> query("SELECT * FROM `resultsuser` WHERE user_id = $userid");
    $checkUser = $check->fetch();


   

    if (!isset($_SESSION['test_id']) || $_SESSION['test_id'] != $testId) {
        $_SESSION['test_id'] = $testId;
        $_SESSION['test_score'] = 0;
    }

    $res = $db->query("SELECT * FROM tests WHERE id = {$testId}");
    $row = $res->fetch();
    $testTitle = $row['title'];

    $questionNum = (int) $_POST['q'];
    if (empty($questionNum)) {
        $questionNum = 0;
    }
    $questionNum++;
    $questionStart = $questionNum - 1;

    $res = $db->query("SELECT count(*) AS count FROM questions WHERE test_id = {$testId}");
    $row = $res->fetch();
    $questionCount = $row['count'];

    $answerId = (int) $_POST['answer_id'];
    if (!empty($answerId)) {
        $res = $db->query("SELECT * FROM answers WHERE id = {$answerId}");
        $row = $res->fetch();
        $score = $row['score'];
        $_SESSION['test_score'] += $score;
    }

    $showForm = 0;
    if ($questionCount >= $questionNum) {
        $showForm = 1;

        $res = $db->query("SELECT * FROM questions WHERE test_id = {$testId} LIMIT {$questionStart}, 1");
        $row = $res->fetch();
        $question = $row['question'];
        $questionId = $row['id'];

        $res = $db->query("SELECT * FROM answers WHERE question_id = {$questionId}");
        $answers = $res->fetchAll();
    } else if(($questionCount < $questionNum) && (!$checkUser)) { //если пользователя нет , то
        $score = $_SESSION['test_score'];

        $res = $db->query("SELECT * FROM results WHERE test_id = {$testId} AND score_min <= {$score} AND score_max >= {$score}");
        $row = $res->fetch();
        $result = $row['result'];

        $db -> query("INSERT INTO `resultsuser` (`user_id`, `tests_id`, `score`) VALUES( '$userid', '$testId', '$score')");//добавляет значение
        session_destroy();
    }
    else{ //если есть
        $score = $_SESSION['test_score'];

        $res = $db->query("SELECT * FROM results WHERE test_id = {$testId} AND score_min <= {$score} AND score_max >= {$score}");
        $row = $res->fetch();
        $result = $row['result'];


        $db -> query("UPDATE `resultsuser` SET score=$score WHERE user_id = $userid AND tests_id = $testId");//обновляет значение
        session_destroy();
    }
?>



<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <link rel="stylesheet" href="teststyle.css">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>
    <?php if ($showForm) { ?>
    <form action="testBD.php?id=<?php echo $testId; ?>" method="post">
    <input type="hidden" name="q" value="<?php echo $questionNum; ?>">
        <div class="test" id="test">  
            <!--Блок с вопросами-->
            <div class="test-questions" id="questions">
                <div class="test-questions-item"> 
                
                    <div class="test-questions-item_question"><?php echo $question?></div></div>
                    <div class="test-questions-item_answers">
                    <?php foreach ($answers AS $answer) {
                    ?>
                    <ul class="test-questions-item_answers"> 
                        <li>
                                <input type="radio" name="answer_id" required value="<?php echo $answer['id']; ?>"> <?php echo $answer['answer']; ?>
                        </li>
                    </ul>
                    <?php } ?>
                    </div>
                </div>
            </div>

            <!--Блок с индикаторами(кол-во отвеченных вопросов и всего)-->
            <div class="test-indicator" id="indicator"> 
                <p>Вопрос <?php echo $questionNum . ' из ' . $questionCount; ?></p>
            </div>


            <!--Блок с результатами
            <div class="test-results" id="results">
                <div class="test-results-item">Блок с результатами

                    <div class="test-results-item_question"><?php echo $question?></div>Блок с вопросом
                    <ul class="test-results-item_answers">Блок с ответом
                        <li>Ответ 1</li>
                        <li>Ответ 2</li>
                    </ul>
                </div>
            </div>-->

            
            <!--Блок с кнопками-->
            <div class="test-controls">
                <?php 
                    if ($questionCount == $questionNum) {
                    //попытка сохранить результаты
                        
                 ?>
                <button class="btn-save" id="btn-success" type="submit">Получить результат</button><!--Кнопка переход к след вопросу-->
                <?php 
                    } else {
                 ?>
                 <button class="btn-next" id="btn-next" type="submit">Далее</button>
                 <?php 
                    }
                 ?>
                <!--<button class="btn-restart" id="btn-restart">С начала</button>Скорее всего уберем ее.Должна появляться в конце теста
                <form action="basichtml0.html">
                    <button class="btn-tema">Повторить темы</button>
                </form>-->
            </div>

        </div>
        </form>
        <?php } else { ?>

           <div class="test-results">
                <div class="test-results-item">
                    <h3 style="text-align:center;">Ваш результат</h3>

                <div class="test-results-item_question"><?php echo $result;?> <br>
                Количество баллов: <?php echo $score;?></div>
                </div>
                <div class="btn">
                    <a class="block__btnOne" href="../../coursers.html">Вернутся к выбору тем</a>
                </div>
            </div>
            
        <?php } ?>
    </body>

</html>