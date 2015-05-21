<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 4: 
		Crie uma função chamada tabelaBrasileirao, que retorne um
		array contendo em cada posição um hash com o nome e pontuação
		do time. Para testar sua função, você deve usar o foreach
		e o resultado final deve ser:
			Cruzeiro : 46 pontos
			Botafogo : 42 pontos
			Grêmio : 37 pontos 
*****************************************************************/

function tabelaBrasileirao(){
	$times[0] = array("nome" => "Cruzeiro", "pontos" => 46);
	$times[1] = array("nome" => "Botafogo", "pontos" => 42);	
	$times[2] = array("nome" => "Gremio", "pontos" => 37);
	return $times;
}
/*echo "<pre>";
print_r (tabelaBrasileirao());
echo "</pre>";
*/
$tabela = tabelaBrasileirao();
foreach ($tabela as $time){
	echo  $time["nome"] . " : " . $time["pontos"] . " pontos" . "<br>";
}
?>