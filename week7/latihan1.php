<?php
function swap(&$x, &$y){
    $temp = $x;
    $x = $y;
    $y = $temp;
}
$a = 50;
$b = 100;

echo "Bilangan sebelum ditukar: ";
echo "$a, $b \n";

swap($a, $b);
echo "Bilangan setelah ditukar : ";
echo "$a, $b \n";
?>