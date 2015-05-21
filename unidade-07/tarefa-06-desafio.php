<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************************** 
	Tarefa 6 - Desafio: (usando arrays)
		Crie a função mesPeloNumero($numeroMes). Essa função vai receber
		um número e retornar o nome do mês. Se receber 1 retorna Janeiro, 
		e se receber 12 retorna Dezembro.
		- Teste a sua função com os números 1, 5, 9 e 12.
		
		Dica: Pra resolver o problema mais rápido, use a função que você
		mesmo criou no desafio 5.

***********************************************************************/

require_once "minhasFuncoes.php";

function mesPeloNumero($numeroMes){
	$meses = meses();
	switch ($numeroMes){
		case 1: return $meses[0];
		case 2: return $meses[1];
		case 3: return $meses[2];
		case 4: return $meses[3];
		case 5:return $meses[4];
		case 6: return $meses[5];
		case 7:return $meses[6];
		case 8:return $meses[7];
		case 9:return $meses[8];
		case 10:return $meses[9];
		case 11:return $meses[10];
		case 12:return $meses[11];
		default: return "Mês Inválido";
	}
}
echo mesPeloNumero(1);

?>