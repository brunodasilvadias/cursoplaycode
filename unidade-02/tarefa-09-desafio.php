<?php
/************************************************************ 
	Desafio: 
		Criar uma funчуo chamada maior_de_idade, que recebe a 
		idade e retorna true (verdadeiro) se for maior ou igual
		a 18 e false (falso) se for menor que 18.
		
		Exemplo: Uma pessoa com 36 anos deve retornar true e 
		com 15 deve retornar false.
			maior_de_idade(36) => true
			maior_de_idade(15) => false
*************************************************************/

function maior_de_idade($idade){
	return $idade >= 18;
}

echo maior_de_idade($_GET['idade']);
?>