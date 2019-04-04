<?php
    session_start();
    echo "<a href=\"./index.php\">Вернуться на страницу</a><br>";
    echo "Вы были на странице ".$_SESSION['test']." раз<br>";
?>