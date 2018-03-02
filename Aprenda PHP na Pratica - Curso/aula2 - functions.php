<?php

function getInfo($atributo){
    // $dados = ["titulo"=>"siteModelo", "descricao"=>"Programando com PHP"];
    $dados = array("titulo"=>"siteModelo", "descricao"=>"Programando com PHP");
    
    /** Adicionando mais elementos no array
    $dados["novo"] = "teste";

    // ou
    
    $dados += ["novo2"=>"teste2"];
    */

    return $dados[$atributo];        
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 2 - Função</title>
</head>
<body>
    <h2><?php echo getInfo("titulo");  ?></h2>
    <p><?php echo getInfo("descricao"); ?></p>
    <p><?php echo getInfo("novo"); ?></p>
    <p><?php echo getInfo("novo2"); ?></p>
</body>
</html>