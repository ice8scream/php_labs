<?php
    session_start();
    $_SESSION['test'] = 0;
    header('Location: ./index.php');
?>