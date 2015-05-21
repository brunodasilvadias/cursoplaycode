<?php
header("Content-Type: text/html; charset=utf-8");
/******************************************************************************
	Tarefa 9 - Desafio: (use o preferir WHILE ou FOR)
		Crie uma função chamada listaNumeros, ela recebe o parametro $tipoNumero
		que pode ser "par" ou "ímpar". SE é passado "par", a função deve mostrar 
		todos os números pares entre 1 e 50, SE é passado "ímpar", deve mostrar
		todos os números ímpares entre 1 e 50.
******************************************************************************/

function listaNumeros($tipoNumero){
	if ( $tipoNumero % 2 == 0){
		for( $cont = 2; $cont <=50; $cont += 2){
			echo $cont."<br>";
		}
	}
	else{
		for( $cont = 1; $cont <=50; $cont += 2){
			echo $cont."<br>";
		}
	}
}
echo listaNumeros( $_GET['tipoNumero']); 

?>