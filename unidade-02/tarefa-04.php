<?php
/********************************************************** 
	Tarefa 4: 
    Criar uma funзгo que mostra a mensagem "Faltam X anos
    para a sua aposentadoria"
***********************************************************/

// Comece esse exercнcio copiando e colando a funзгo que criou no exercнcio
// anterior. A nova funзгo que vocк vai criar, deve usar essa funзгo anterior.
function calcular_aposentadoria($idade_atual) {
    return 65 - $idade_atual;
}

function mensagem_aposentadoria($idade_atual) {
    $anos = calcular_aposentadoria($idade_atual);
    $mensagem = "Faltam $anos anos para a sua aposentadoria";
    return $mensagem;
}

echo mensagem_aposentadoria($_GET['idade_atual']);
?>