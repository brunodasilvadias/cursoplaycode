<?php
header("Content-Type: text/html; charset=utf-8");
/************************************************************************ 
	Tarefa 1: 
		Crie uma fun��o chamada termostato. Essa fun��o deve receber um 
		n�mero no par�metro temperatura. Se a temperatura for menor 
		que zero, a fun��o retorna a mensagem "Temperatura Negativa". 
		Se for maior que zero, retorna a mensagem "Temperatura positiva"
		- Teste sua fun��o com as temperaturas 0, -8 e 25.
************************************************************************/
function termostato($temperatura)
{
	if ($temperatura < 0) 
	{
		return "Temperatura Negativa";
	}
	else
	{
		return "Temperatura Positiva";
	}
}

echo termostato(30);
?>