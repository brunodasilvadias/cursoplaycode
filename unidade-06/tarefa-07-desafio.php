<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 7 - Desafio: (USE FOR)
		Refaça o código da tarefa 3 usando o FOR ao invés de WHILE
***********************************************************************/

for ( $cont = 10; $cont >= 0; $cont--){
	
	echo $cont."<br>";
	
	if ( $cont == 0){
		echo "LANÇAR!!";
	}
}
?>