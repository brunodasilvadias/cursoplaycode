<?php
/********************************************************** 
	Tarefa 4: 
		Use uma fun��o que leia a frase "Eu sei programar em
		Ruby" e substitua a palavra Ruby pela palavra PHP.
		~> Documenta��o: http://bit.ly/str_replace
***********************************************************/

$frase = "Eu sei programar em Ruby";
echo $frase, "<br />";
echo str_replace("Ruby", "PHP", $frase);
