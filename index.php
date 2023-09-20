<?php
$num = 1;
$num = 1.2;
var_dump($num);
$text = 'string $num \n';
echo $text;
$text = "string $num \n";
echo $text;
$array = array(1,2,3,4);
$array = [1,2,3,4];
$array = [
    6 => 4,
    1,
    'asd',
    'color' => 'red',
    3,
    4,
    5
];
var_dump($array);

$num = 1;
$num = $num + 1;
$num += 1;
$num++;
$num -= 2;
$num --;
$num *=2;
$num /=3;
$num %=2;
$text = 'hello' . 'hi' . 5;

if(true == true){

}
$bool = $num > 10;
$bool = $num < 10;
$bool = $num >= 10;
$bool = $num <= 10;
$bool = $num == 10;
$bool = $num === 10;
$bool = $num != 10;
$bool = $num !== 10;
$bool = true && false;
$bool = true || false;
$bool = !true;
$bool = true && false || true && !true;
$null = null;