<?php
    session_start();
    if(!isset($_SESSION['test'])){
        $_SESSION['test'] = 0;   
    }
    if($_SESSION['test'] == 0){
        echo "Вы зашли на эту страницу 1 раз<br>";
    } 
    $_SESSION['test']++;
    echo "<a href=\"./test.php\">Сколько раз вы были на этой странице?</a><br>";
    if($_SESSION['test'] != 0){
        echo "<a href=\"./session_shut_down.php\">Сбросить сессию</a>";
    }
    
    // if(isset($_COOKIE['my-cookie'])) {
    //     echo 'Вы были на этой странице';
    // } else {
    //     SetCookie("my-cookie","Here");
    //     echo 'Добро пожаловать на страницу';
    // }

    // //echo @$_COOKIE['my-cookie'];
    // SetCookie("my-cookie", null);
?>