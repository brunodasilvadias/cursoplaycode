<?php
/********************************************************** 
	Tarefa 1: 
    Definir uma fun��o que triplica um valor. Se essa
    fun��o receber o n�mero 3 por exemplo, ela retorna 9.
    E se receber o n�mero 100, ela retorna 300.
***********************************************************/

function triplicar($numero){
    return $numero * 3;
}

echo triplicar($_GET['numero']);
?>