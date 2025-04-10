



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>

<h1>PHP com POO - Exemplo 02</h1>
<hr>
<?php
// carregando/importando a classe
require_once "src/Cliente.php";
//criar  objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

//atribuindo valores para os atributos
$clienteA -> setNome("fulano da silva");
$clienteA -> setIdade(30) ;
$clienteA -> setEmail("fulano@gmail.com");

$clienteB ->setNome  ("Zezinho");
$clienteB ->setIdade (25);
$clienteB -> setEmail( "zezinho@gmail.com")
?>
<h2>Acessando/lendo os dados do objeto</h2>


<h2>teste de acesso aos recursos da classe atraves do objeto</h2>



<pre><?=var_dump($clienteA, $clienteB)?></pre>


    
</body>
</html>