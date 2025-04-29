<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conflito de classes</title>
</head>
<body>
    <h1>Evitando conflito de classes</h1>

<?php

use Fornecedores\pagamento;
use Prestadores\Pagamento as PrestadoresPagamento;//nesse caso com apelido

require_once "vendor/autoload.php";

//criando objeto para usar as classes pagamento
$pagamentoFornecedor = new Pagamento();
$pagamentoPrestador = new PrestadoresPagamento();

?>

<pre><?=var_dump($pagamentoFornecedor,$pagamentoPrestador)?></pre>
    
</body>
</html>