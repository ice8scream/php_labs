<?php
    $n = 10;
    header('Content-type: image/png');
    $canvas = imagecreate(720,480);
    imagecolorallocate($canvas,0x00,0x00,0x00);
    $red = imagecolorallocate($canvas,0xff,0x00,0x00);
    $blue = imagecolorallocate($canvas,0x00,0x00,0xff);
    $yellow = imagecolorallocate($canvas,0xff,0xff,0x00);

    $leftx = 0;
    $middlex = 15;
    $rightx = 50;
    $topy = 0;
    $middley = 15;
    $boty= 30;

    $sx = 270;
    $sy = 225;
    $line = 450 / $n;
    for($part = 0; $part < $n; $part += 1){ 
        $particles = [$line * $part + $sx + $leftx,$sy + $middley,$line * $part + $sx + $middlex,$sy + $topy,$line * $part + $sx + $rightx,$sy + $middley,$line * $part + $sx + $middlex,$sy + $boty];
        ImageFilledPolygon($canvas, $particles, 4, $yellow);
    }

    ImageFilledEllipse($canvas, 200, 240, 150, 50, $red);
    $t1X = 200;
    $t1Y = 240;
    $t2X = 275;
    $t2Y = 200;
    $t3Y = 480 - $t2Y;
    $points = [$t1X, $t1Y, $t2X, $t2Y, 340, $t2Y +20, $t2X, $t2Y +15, $t2X -20 ,$t1Y, $t2X, $t3Y - 15, 340, $t3Y -20, $t2X, $t3Y];
    ImageFilledPolygon($canvas, $points, 8, $red);
    for($window = 0; $window < 3; $window++){
        ImageFilledEllipse($canvas, 160 + $window * 40, 240, 30, 30, $blue);
    }

    
    
   
    /*$pink = imagecolorallocate($canvas,255,105,180);
    imagerectangle($canvas,50,50,200,150, $pink);


    imagerectangle($canvas,50,50,150,150, $pink);*/
    imagejpeg($canvas);
    imagedestroy($canvas);
?>