<?php
$fmod = $fmod = "database.txt";
$str=file_get_contents($fmod);
$Replacement = $_GET['name']." ".$_GET['country']." ".$_GET['capital'];
$wrt = '/'.$_GET['rep'].'/';
$str = preg_replace($wrt, $Replacement, $str, 1);
file_put_contents($fmod, $str);
echo $_GET['rep']. "<br>". "Заменено на<br>". $Replacement."<br>". "В файле \"". $fmod."\"<br>";
echo '<a href="http://localhost/php_labs/Lab4/index.php">К поиску/записи</a>'
?>