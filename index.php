<?php
	echo <<< EOL
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3 Lab</title>
    <style>
        input[type="number"] {
            width: 60px;
            height: 30px;
        }
        h1 {
            width: 1000px;
        }
        div {
            text-align: center;
            border: 2px solid gray;
            width: 200px;
            padding: 10px 0;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>  
<H1> Задайте две окружности четырьмя точками, определяющими диагонали двух прямоугольников в которые вписаны окружности. </h1>
<H2> Этот заурядный сайт покажет пересекаются ли эти окружности, так же еще пару вещей :)</h2>
<div>
        <h3>Пример</h3>
        <span>Точка</span>
        <input type="number" name="fs1X" value="1" readonly>
        <input type="number" name="fs1Y" value="-3" readonly>
</div>

<form action="http://localhost/third-lab/calc.php" method="get">
    <span>Введите точки 1-го квадрата</span>
    <br>
    <span>1 Точка</span>
    <input type="number" name="fs1X" placeholder="X">
    <input type="number" name="fs1Y" placeholder="Y">
    <br>
    <span>2 Точка</span>
    <input type="number" name="fs2X" placeholder="X">
    <input type="number" name="fs2Y" placeholder="Y">
    <br>
    <br>
    <span>Введите точки 2-го квадрата</span>
    <br>
    <span>1 Точка</span>
    <input type="number" name="ss1X" placeholder="X">
    <input type="number" name="ss1Y" placeholder="Y">
    <br>
    <span>2 Точка</span>
    <input type="number" name="ss2X" placeholder="X">
    <input type="number" name="ss2Y" placeholder="Y">
    <br>
    <input type="submit" style="margin-left: 50px; margin-top: 20px">
</form>
</body>
</html>
EOL;
?>

