<?php
/******************************************************************
	Tarefa 5: 
  	Criar uma fun��o que verifica se a temperatura est� negativa. 
  	Se estiver abaixo de zero retorna true (verdadeiro) e se 
  	estiver acima de zero retorna false (falso)
*******************************************************************/

function temperatura_negativa ($temperatura){
	return $temperatura < 0;
}

echo temperatura_negativa($_GET['temperatura']);
?>