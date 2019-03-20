<!-- $f = fopen("filename", w+ r+);
fwrite/ fread
fputs/ fgets
fclose
$mas = file('filename');([string1,string2,...]) -->
<?php
$wrt = $_GET['name']."|".$_GET['country']."|".$_GET['capital']."\n";
echo $_GET['choose']."<br>";
echo $wrt;
$fmod = "database.txt";
$f = fopen($fmod , 'a');
fwrite($f, $wrt);
fclose($f);
?>