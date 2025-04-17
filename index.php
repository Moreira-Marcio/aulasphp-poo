



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 05</title>
</head>
<body>

<h1>PHP com POO - Exemplo 05</h1>
<hr>
<?php

require_once "src/Enums/Situacao.php"; //enum
require_once "src/Models/Cliente.php"; //superclasse
require_once "src/Models/PessoaFisica.php"; //subclasse
require_once "src/Models/PessoaJuridica.php"; //subclasse


$clienteCpf= new PessoaFisica("fulano","fulano@gmail.com",25,"123.123.123-23");
$clientePJ= new PessoaJuridica("a", "a@g.com", "44554", 2019, "aaa");


?>

 <h2>Relatorios</h2>

 <h3>PF</h3>
 <?=$clienteCpf->relatorio()?>

 <h3>PJ</h3>
 <?=$clientePJ->relatorio()?>

    
</body>
</html>