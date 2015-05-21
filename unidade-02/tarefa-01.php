<?php
/********************************************************** 
	Tarefa 1: 
    Definir uma funзгo que triplica um valor. Se essa
    funзгo receber o nъmero 3 por exemplo, ela retorna 9.
    E se receber o nъmero 100, ela retorna 300.
***********************************************************/

function triplicar($numero){
    return $numero * 3;
}

echo triplicar($_GET['numero']);
?>