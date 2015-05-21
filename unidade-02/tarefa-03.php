<?php
/***************************************************** 
	Tarefa 3: 
    Criar uma funзгo que calcule quantos anos faltam
    para sua aposentadoria. Considerando que a idade
    mнnima para aposentar й 65 anos.
******************************************************/
function calcular_aposentadoria($idade_atual) {
    return 65 - $idade_atual;
}

echo calcular_aposentadoria($_GET['idade_atual'])


?>