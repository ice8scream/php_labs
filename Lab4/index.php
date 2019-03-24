<?php
	echo <<< EOL
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>3 Lab</title>
    <style>
        input[type="number"] {
            width: 200px;
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

        input[type="radio"] {
            display: none;
        }

        input[type="radio"]:checked +span {
            color: yellowgreen;
            font-weight:  bold;
            text-shadow: 1px 1px gray;
        }
    </style>
</head>
<body>  
<H1>В файле находится информация про множество Банков</h1>
<H2> Этот заурядный сайт позволит вам добавить, найти или изменить параметры нужного вам банка</h2>
<div>
        <h3>Пример</h3>
        <span>Банк</span>
        <input type="text" name="name" value="РНКБ" readonly><br>
        <input type="text" name="country" value="Россия" readonly><br>
        <input type="text" name="capital" value="$$$" readonly><br>
</div>

<form action="http://localhost/php_labs/Lab4/choose.php" method="get">
    <span>Введите параметры нужного вам банка</span>
    <br>
    <input type="text" name="name" placeholder="Название"><br>
    <input type="text" name="country" placeholder="Страна"><br>
    <input type="text" name="capital" placeholder="Капитал"><br>
    <label>
        <input type="radio" name="choose" value="write" checked>
        <span class="choose-radio">Записать</span>
    </label><br>
    <label>
        <input type="radio" name="choose" value="find">
        <span class="choose-radio">Найти</span>
    </lable>
    <br>
    <input type="submit" style="margin-left: 50px; margin-top: 20px">
</form>
</body>
</html>
EOL;
?>


<!-- $f = fopen("filename", w+ r+);
fwrite/ fread
fputs/ fgets
fclose
$mas = file('filename');([string1,string2,...]) -->
