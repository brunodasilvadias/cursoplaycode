<?php
/***************************************************** 
	Tarefa 3: 
    Criar uma fun��o que calcule quantos anos faltam
    para sua aposentadoria. Considerando que a idade
    m�nima para aposentar � 65 anos.
******************************************************/
function calcular_aposentadoria($idade_atual) {
    return 65 - $idade_atual;
}

echo calcular_aposentadoria($_GET['idade_atual'])


?>