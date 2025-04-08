<?php
// carregando/importando a classe
require_once "src/Cliente.php";
//criar  objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

//atribuindo valores para os atributos
$clienteA -> nome = "fulano da silva";
$clienteA -> idade = 30;
$clienteA -> email = "fulano@gmail.com"
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
<h2>teste de acesso aos recursos da classe atraves do objeto</h2>
<pre><?=var_dump($clienteA, $clienteB)?></pre>


    
</body>
</html>