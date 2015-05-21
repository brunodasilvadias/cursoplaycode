<?php
header("Content-Type: text/html; charset=utf-8");
/********************************************************* 
	Tarefa 5: 
		Crie uma funчуo chamada validarSenha. Se a senha
		for "123456", a funчуo retorna a mensagem "Login
		efetuado com sucesso", senуo, retorna a mensagem
		"Senha invсlida".
**********************************************************/

function validarSenha($pass){
	if ($pass == "123456"){
		return "Login Efetuado com sucesso!";
	}
	
	else {
		return "Senha invсlida";
	}
}

echo validarSenha("123456");
?>