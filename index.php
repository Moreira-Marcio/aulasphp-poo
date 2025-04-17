



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

require_once "src/Situacao.php"; //enum
require_once "src/Cliente.php"; //superclasse
require_once "src/PessoaFisica.php"; //subclasse
require_once "src/PessoaJuridica.php"; //subclasse


$clienteCpf= new PessoaFisica("fulano","fulano@gmail.com",25,"123.123.123-23");
$clientePJ= new PessoaJuridica("a", "a@g.com", "44554", 2019, "aaa");


?>
<pre><?= var_dump($clienteCpf, $clientePJ)?></pre>


    
</body>
</html>