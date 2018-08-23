<?php

$pessoas = array();

	array_push($pessoas, array(

	'Nome' => 'Joao',
	'Idade' =>30

));

	array_push($pessoas, array(

	'Nome' => 'Marcio',
	'Idade' =>25
));

echo json_encode($pessoas); // O Json_encode vai pegar o array e transforma-lo e json para poder ser utilizado por outra linguagem de programação como java


?>