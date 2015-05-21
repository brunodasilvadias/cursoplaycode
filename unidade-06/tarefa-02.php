<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************ 
	Tarefa 2: (use WHILE)
		Crie um programa que mostre somente os números pares entre 1 e 100
*************************************************************************/

$contador = 2;

while( $contador <= 100 ){
	echo $contador . "<br>";
	$contador += 2;
}

?>