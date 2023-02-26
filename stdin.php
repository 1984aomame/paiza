<?php
/*
標準入力(keyboardで打ち込み)
Aaaaafge
6
22
33
*/


// Here your code !
$input = fgets(STDIN);  //一行ずつしかひろわない
$input2 = fgets(STDIN);  //一行ずつしかひろわない
echo "標準入力:".$input."\n";    //余分に空行がはいる 入力値を入力する際に改行をいれているから改行がはいってしまう

echo "標準入力2:".$input2."\n";
/* 改行を取り除く*/
$input1_1 = trim(fgets(STDIN));   //変数側にはいった改行をトリム
$input1_2 = trim(fgets(STDIN));
echo "標準入力1_1:".$input1_1."\n";     
echo "標準入力1_2:".$input1_2."\n";
echo "標準入力1_2:".$input1_2+$input1_1;




/* 結果を表示
標準入力:Aaaaafge

標準入力2:6

標準入力1_1:22
標準入力1_2:33
標準入力1_2:55
*/
?>
