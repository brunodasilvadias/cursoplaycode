<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 3:
		Crie uma função chamada liderBrasileirao. Essa função vai
		retornar um array do tipo hash, ou seja, com índice do tipo
		string. O hash será formado pelo nome do tipo e a atual
		pontuação dele no campeonato brasileiro.
*****************************************************************/

function diasUteis(){
	 $dias = array( "segunda", "terça", "quarta", "quinta", "sexta" );
	 return $dias;
}

//print_r( diasUteis());

//echo count($dias);

foreach( diasUteis() as $dia){
	echo $dia . "<br>";
}
?>