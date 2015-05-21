<?php
header("Content-Type: text/html; charset=utf-8");
/***************************************************************** 
	Tarefa 4: (use FOR) 
		Crie uma função chamada contarAte, essa função deve receber 
		um numero como parâmetro e mostrar todos os números até chegar 
		no número informado no parâmetro. Essa função só vai saber
		contar até 40. Sempre que chegar ao 40, ela deve parar a 
		execução e mostrar a mensagem "Não sei contar mais"
		- Teste a função com os números 7, 25 e 48
*****************************************************************/
/*
function contarAte($num){
	
	if ( $num > 40){
		
		for($cont = 0; $cont <= 40; $cont++){
			echo $cont . "<br>";
		}
		echo "Não sei contar mais";
	}
	
	else {
		for($cont = 1; $cont <= $num; $cont++){
			echo $cont . "<br>";
		}	
	}
}
*/
function contarAte($num){
	
	for($cont = 1; $cont <= $num; $cont++){
		echo $cont . "<br>";
			
		if ( $cont == 40){
			echo "Não sei contar mais";
			break;
			}
		}	
	}
echo contarAte( $_GET['num']); 

?>