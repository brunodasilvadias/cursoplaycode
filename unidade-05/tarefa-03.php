<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 3: (USE SWITCH CASE) 
		Agora nós vamos criar um controle remoto. Quando o número
		do canal for digitado, ele deve exibir o nome da emissora.
		- Faça testes para que sejam exibidos os canais SBT e Globo
*****************************************************************/

function controleRemoto($canal){
	
	switch ($canal){
		case 2: return "TVE";
		case 4: return "Rede Globo";
		case 6: return "Rede TV!";
		case 7: return "Rede Bandeirantes";
		case 11:return  "SBT";
		case 13:return  "Rede Record";
		default:return  "Canal Inválido";
	}
}
echo controleRemoto($_GET['canal']);
?>