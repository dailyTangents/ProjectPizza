<?php
// declare image size
//$img = imagecreatetruecolor(450,120);


// create a new image from a file
$img=imagecreatefromjpg('t01.jpg');


// define color patterns you want to use
$white = imagecolorallocate($img, 255, 255, 255);
$black = imagecolorallocate($img, 0, 0, 0);
$grey = imagecolorallocate($img,150,150,150);
$red = imagecolorallocate($img, 255, 0, 0);
$pink = imagecolorallocate($img, 200, 0, 150);


// create your random string
function randomString($length){
// define which numbers and characters you want in your string
    $chars = "abdefghijkmnpqrstuvwxyz23456789";
    srand((double)microtime()*1000000);
    $str = "";
    $i = 0;
//    echo "length= " . $length ;
            while($i <= $length){
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $str = $str . $tmp;
            $i++;
        }
    return $str;
}

// draw random lines
// this needs some work

for($i=1;$i<=rand(1,5);$i++){
    $color = (rand(1,2) == 1) ? $pink : $red;
    imageline($img,rand(5,120),rand(50,20), rand(5,70)+250,rand(5,20)+250, $color);
}

  imagefill($img, 0, 0, $grey);

$string = randomString(rand(5,6));
$_SESSION['string'] = $string;

imagettftext($img, 52, 0, 30, 70, $black, "helpers/101! Star Lit Nght.ttf", $string);

header("Content-type: image/jpeg");
imagejpeg($img); ;
imagedestroy($img);

?>
