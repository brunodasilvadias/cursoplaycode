<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************* 
	Tarefa 5: 
		Crie uma fun��o chamada validarSenha. Se a senha
		for "123456", a fun��o retorna a mensagem "Login
		efetuado com sucesso", sen�o, retorna a mensagem
		"Senha inv�lida".
**********************************************************/

function validarSenha($pass){
	if ($pass == "123456"){
		return "Login Efetuado com sucesso!";
	}
	
	else {
		return "Senha inv�lida";
	}
}

echo validarSenha("123456");
?>