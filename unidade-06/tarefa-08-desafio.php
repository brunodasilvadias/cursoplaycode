<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 8 - Desafio: (use o FOR)
		Crie um programa que mostre somente os números múltiplos de 3
		que estão entre 1 e 100.
***********************************************************************/
for( $cont = 3; $cont <= 100; $cont+=3){
	echo $cont."<br>";
}

?>