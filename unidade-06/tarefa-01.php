<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 1: (use WHILE e depois FOR) 
		Crie um pequeno programa que mostre os números de 1 a 3 na tela.
		Depois mude o código, para mostrar os números de 1 a 10, depois
		de 1 a 100 e por último de 1 a 1000;
***********************************************************************/
/*
$contador = 1;
while ( $contador <= 10 ){
	echo $contador . "<br>";
	$contador++;
}
*/

for ( $contador = 1; $contador <= 10; $contador++){
	echo $contador . "<br>";
}

?>