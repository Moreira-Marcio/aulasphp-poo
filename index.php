<?php
// carregando/importando a classe
require_once "src/Cliente.php";
//criar  objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

//atribuindo valores para os atributos
$clienteA -> nome = "fulano da silva";
$clienteA -> idade = 30;
$clienteA -> email = "fulano@gmail.com";

$clienteB -> nome = "Zezinho";
$clienteB -> idade = 25;
$clienteB -> email = "zezinho@gmail.com"
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 01</title>
</head>
<body>

<h1>PHP com POO - Exemplo 01</h1>
<hr>

<h2>Acessando/lendo os dados do objeto</h2>

<h3>Cliente A</h3>

<div>
    <?=$clienteA -> exibirDados()?>
</div>
<ul>
   
    <li><b>Idade:</b> <?=$clienteA->idade?></li>
    <li><b>E-mail</b> <?=$clienteA->email?></li>
</ul>

<h3>Cliente B</h3>

<div>
    <?=$clienteB -> exibirDados()?>
</div>
<ul>
   
    <li><b>Idade:</b> <?=$clienteB->idade?></li>
    <li><b>E-mail</b> <?=$clienteB->email?></li>
</ul>

<h2>teste de acesso aos recursos da classe atraves do objeto</h2>



<pre><?=var_dump($clienteA, $clienteB)?></pre>


    
</body>
</html>