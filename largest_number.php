<?php
$num1 = 4;
$num2 = 5;
$num3 = 6;

$lgNum = $num1;

if ($num1 > $num2 && $num1 > $num3) {
    echo "The Largest Number :  $num1";
} elseif ($num2 > $num3) {
    $lgNum = $num2;
    echo "The Largest Number : $num2";
} else {
    $lgNum = $num3;
    echo "The Largest Number : $num3";
};
