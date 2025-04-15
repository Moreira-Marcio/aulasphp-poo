



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 04</title>
</head>
<body>

<h1>PHP com POO - Exemplo 04</h1>
<hr>
<?php
// carregando/importando a classe
require_once "src/Cliente.php";
//criar  objeto/instância da classe
$clienteA = new Cliente("fulano",30,"fulano@gmail.com");
$clienteB = new Cliente("zezinho",25,"zezinho@gmail.com");
?>
<h2>Acessando/lendo os dados do objeto</h2>
<ul>
    <li><b>Nome:</b><?=$clienteA->getNome()?></li>
    <li><b>Idade:</b><?=$clienteA->getIdade()?></li>
    <li><b>E-mail:</b><?=$clienteA->getEmail()?></li>
    <li><b>Faixa etaria:</b> <?=$clienteA->verificarIdade()?></li>

</ul>
<ul>
     <li><b>Nome:</b><?=$clienteB->getNome()?></li>
    <li><b>Idade:</b><?=$clienteB->getIdade()?></li>
    <li><b>E-mail:</b><?=$clienteB->getEmail()?></li>
    <li><b>Faixa etaria:</b> <?=$clienteB->verificarIdade()?></li>

</ul>
<h2>teste de acesso aos recursos da classe atraves do objeto</h2>






    
</body>
</html>