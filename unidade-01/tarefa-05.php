<?php

// Capturar dados de entrada do browser
// ##################################################

/* Fixar um valor de uma vari�vel no c�digo n�o faz muito sentido, pois s� 
o programador poderia alterar os valores. Faz mais sentido capturarmos os 
dados de entrada digitados pelo usu�rio. Vamos usar o comando $_GET para 
pegar os dados da url do site */

/**********************************************************************
	Tarefa 5:
		Coletar o parametro nome da url e mostrar concatenado com a frase, 
		exibindo Bom dia Fulano
***********************************************************************/


$nome = $_GET['nome'];
echo "Bom dia $nome";













?>