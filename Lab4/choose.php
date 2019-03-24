<!-- $f = fopen("filename", w+ r+);
fwrite/ fread
fputs/ fgets
fclose
$mas = file('filename');([string1,string2,...]) -->
<?php
    if($_GET['choose'] == 'write'){
        $wrt = $_GET['name']." ".$_GET['country']." ".$_GET['capital']."\n";
        $fmod = "database.txt";
        echo "в файл \"$fmod\" ". " добавлена запись:<br>". $wrt. "<br>";
        $f = fopen($fmod , 'a');
        fwrite($f, $wrt);
        fclose($f);
        echo '<a href="http://localhost/php_labs/Lab4/index.php">К поиску/записи</a>';
    } else {
        $fmod = "database.txt";
        $f = fopen($fmod , 'r');
        $wrt = $_GET['name']." ".$_GET['country']." ".$_GET['capital'];
        $gotcha = false;
        while(!feof($f)){
            $str = fgets($f);
            if(strpos($str, $wrt) !== false){
                $gotcha = true;
                break;
            }
        }
        fclose($f);
        if($gotcha == false){
            echo "Запись \"$wrt\" НЕ найдена";
        }else {
            echo "Запись \"$wrt\" найдена<br>Изменить?";
           /* $str=file_get_contents($fmod);
            $Replacement = 'edcba';
            $wrt = '/'.$wrt.'/';
            $str = preg_replace($wrt, $Replacement, $str, 1);
            file_put_contents($fmod, $str);*/


echo <<< EOL
            <form action="http://localhost/php_labs/Lab4/rewrite.php" method="get">
                <br>
                <span>Изменить</span><br>
                <input type="text" name="rep" value="$wrt" readonly><br>
                <span>На</span><br>
                <input type="text" name="name" placeholder="Название" content=""><br>
                <input type="text" name="country" placeholder="Страна"><br>
                <input type="text" name="capital" placeholder="Капитал"><br>
                <br>
                <input type="submit" style="margin-left: 50px; margin-top: 20px" value="Изменить">
            </form>
            <a href="http://localhost/php_labs/Lab4/index.php">Не измянть, к поиску/записи</a>
EOL;
            }
        }
?>