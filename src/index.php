<?php

require_once 'Pessoa.php';

$pessoaA = new Pessoa("Levi", 36);

$pessoaA->setNome("Costa");
$meuNome = $pessoaA->getNome();

echo($meuNome);





?>