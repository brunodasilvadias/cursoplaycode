<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************ 
	Tarefa 5 - Desafio:
		Crie uma função chamada meses(), que retorna um array com todos os
		meses do ano. Use o comando foreach para testar a função e dar
		um echo em todas as posições do array retornado pela função.
*************************************************************************/
require_once "minhasFuncoes.php";
/*
echo "<pre>";
print_r (meses());
echo "</pre>";
*/
$meses = meses();

foreach ( $meses as $mes ){
echo $mes . "<br>";
}
?>