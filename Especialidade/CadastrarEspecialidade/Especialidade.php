<?php

$nomeE = htmlspecialchars($_POST['nomeE']);

require_once 'ConexaoCadastroE.php';

$con->query("INSERT INTO CadastroEspecialidade(nome_especialidade) VALUES ('$nomeE')");

echo "Especialidade Cadastrada";
?>