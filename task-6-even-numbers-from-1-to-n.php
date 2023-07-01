<?php
///////////////////////////////////////////////////////////
// Входные данные:                                       //
// Нужно ввести число больше 1.                          //
///////////////////////////////////////////////////////////
// Выходные данные:                                      //
// Нужно вывести чётные числа от 1 до введенного числа.  //
///////////////////////////////////////////////////////////

// Входные данные
$number = readline("Введите число больше 1: ");

// Выходные данные
if ($number < 1) {
	echo "Неверный ввод";
	exit(2);
}

$output = "";

for ($i = 1; $i <= $number; $i++) {
	if ($i % 2 !== 0) continue;
	$output .= $i . ", ";
}

$output = substr($output, 0, -2);
echo $output;
?>