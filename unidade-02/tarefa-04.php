<?php
/********************************************************** 
	Tarefa 4: 
    Criar uma fun��o que mostra a mensagem "Faltam X anos
    para a sua aposentadoria"
***********************************************************/

// Comece esse exerc�cio copiando e colando a fun��o que criou no exerc�cio
// anterior. A nova fun��o que voc� vai criar, deve usar essa fun��o anterior.
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