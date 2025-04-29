



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 06</title>
</head>
<body>

<h1>PHP com POO - Exemplo 07</h1>
<hr>
<?php
//sempre que trabalharmos com namespaces sera necessario especificar atraves do use quais classes/enums/funçoes serao usadas
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

require_once "src/Enums/Situacao.php"; //enum
require_once "src/Models/Cliente.php"; //superclasse
require_once "src/Models/PessoaFisica.php"; //subclasse
require_once "src/Models/PessoaJuridica.php"; //subclasse


$clienteCpf= new PessoaFisica("fulano","fulano@gmail.com",25,"123.123.123-23");
$clientePJ= new PessoaJuridica("a", "a@g.com", "44554", 2019, "aaa");

//codigo abaixo dara erro, pois o cliente é uma classe abstrata, portanto não podemos criar objeto a partir dela
//$clienteGenerico = new Cliente ("fulano","fulano@gmail.com");
//var_dump($clienteGenerico) 
?>

 <h2>Relatorios</h2>
<!-- Acessando as opçoes do ENUM atraves do getSituacao()->name -->

 <h3>PF</h3>
 <?=$clienteCpf->relatorio()?>
 <p><b>Situação:</b> <?=$clienteCpf->getSituacao()->name?></p>

 <h3>PJ</h3>
 <?=$clientePJ->relatorio()?>
 <p><b>Situação:</b> <?=$clientePJ->getSituacao()->name?></p>

    
</body>
</html>