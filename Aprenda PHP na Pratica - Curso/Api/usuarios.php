<?php

function getUsuarios(){
	$usuarios = [
		["nome"=>"Guilherme", "email"=>"gui@mail.com"],
		["nome"=>"Maria", "email"=>"mari@mail.com"],
		["nome"=>"Pedro", "email"=>"pedro@mail.com"]
	];

	return $usuarios;
}

function exibeUsuario(){
	$usuarios = getUsuarios();
	$html = "";

	foreach($usuarios as $chave => $usuario){
		$nome  = $usuario["nome"];
		$email = $usuario["email"];

		$html .= "<li>Nome: $nome - Email: $email </li>";
	}

	return $html;
}

function exibeUsuarioComFor(){
	$usuarios = getUsuarios();
	$html = "";

	for($y = 0; $y < count($usuarios); $y++){
		$nome = $usuarios[$y]['nome'];
		$email = $usuarios[$y]['email'];

		$html .= "<li>Nome: $nome - Email: $email </li>";
	}

	return $html;
}