<?php

$fcCX = ((int)$_GET['fs1X'] - (int)$_GET['fs2X']) / 2 + (int)$_GET['fs2X'];
$fcCY = ((int)$_GET['fs1Y'] - (int)$_GET['fs2Y']) / 2 + (int)$_GET['fs2Y'];
$fcCR = sqrt( (pow((int)$_GET['fs1X'] - (int)$_GET['fs2X'], 2) + pow((int)$_GET['fs1Y'] - (int)$_GET['fs2Y'], 2)) * 2 ) / 4;

$scCX = ((int)$_GET['ss1X'] - (int)$_GET['ss2X']) / 2 + (int)$_GET['ss2X'];
$scCY = ((int)$_GET['ss1Y'] - (int)$_GET['ss2Y']) / 2 + (int)$_GET['ss2Y'];
$scCR = sqrt( (pow((int)$_GET['ss1X'] - (int)$_GET['ss2X'], 2) + pow((int)$_GET['ss1Y'] - (int)$_GET['ss2Y'], 2)) * 2 ) / 4;
/*$fcCY = (int)$_GET
$fcR = */
echo <<< EOL
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3 Lab calc</title>
    <style>
        input[type="number"] {
            width: 60px;
            height: 30px;
        }
    </style>
</head>
<body>  
    Центр первого круга в точке: ($fcCX , $fcCY),<br>
    Радиус первого круга равен: $fcCR ед.<br>
    <br>
    Центр второго круга в точке: ($scCX , $scCY),<br>
    Радиус второго круга равен: $scCR ед.<br>
    <br>

EOL;
// echo "Center of first circle = (".$fcCX.";".$fcCY.")";
// echo "Radius of first circle = (".$fcCR.")";
// echo "<br>";
// echo "Center of second circle = (".$scCX.";".$scCY.")";
// echo "Radius of second circle = (".$scCR.")";

if( sqrt(pow($fcCX - $scCX , 2) + pow($fcCY - $scCY , 2)) <= $fcCR + $scCR) {
    echo "<p>Круги пересекаются</p>";
} else {
    echo "<p>Круги НЕ пересекаются</p>";
}
echo "<br>";
echo '<a href="http://localhost/php_labs/third-lab/index.php">Попробовать другие точки(назад)</a>';
echo "\t</body>\n</html>";
?>