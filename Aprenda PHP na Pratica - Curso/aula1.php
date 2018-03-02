<?php
/**
 * Created by PhpStorm.
 * User: jose
 * Date: 3/2/18
 * Time: 12:30 PM
 */

    $name = "José";
    $age = "24";
    $email = "josenunesra@gmail.com";
    
//    $info = "Name: ".$name." - Age: ".$age." - email: ".$email;
//    echo $info;
 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">        
</head>
<body>
    <h1>PHP with HTML</h1>    
    <p><b>Nome:</b> <?php echo $name ?> </p>
    <p><b>Idade:</b> <?php echo $age ?> </p>
    <p><b>Email:</b> <?php echo $email ?> </p>
</body>
</html>

