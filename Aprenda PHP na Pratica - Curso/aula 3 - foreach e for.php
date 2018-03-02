<?php

function getInfo($atributo){
	// $dados = ["titulo"=>"siteModelo", "descricao"=>"Programando com PHP"];
	$dados = array("titulo"=>"siteModelo", "descricao"=>"Programando com PHP");
			
	return $dados[$atributo];        
}

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Aula 3 e 4 - Foreach e For</title>
</head>
<body>
	<h2><?php echo getInfo("titulo");  ?></h2>
	<p><?php echo getInfo("descricao"); ?></p>

	<ul>
		<?php
			echo exibeUsuarioComFor();
		?>
	</ul>
</body>
</html>