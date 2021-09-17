<?php

$codigo = htmlspecialchars($_POST['Codigo']);
$nomeproc = htmlspecialchars($_POST['nomeproc']);
$valor = htmlspecialchars($_POST['valor']);
$genero = htmlspecialchars($_POST['Genero']);
$addexcecao = htmlspecialchars($_POST['Excecao']);

require_once('ConexaoCadastrarP.php');

$insp = $con->prepare("INSERT INTO CadastroProcedimento (codigo, nomeproc, valor, genero, addexcecao) VALUES (:c, :np, :v, :g, :adde)");
$insp->bindParam(":c", $codigo);
$insp->bindParam(":np", $nomeproc);
$insp->bindParam(":v", $valor);
$insp->bindParam(":g", $genero);
$insp->bindParam(":adde", $addexcecao);
$insp->execute();

echo "Procedimento Cadastrado com Sucesso!";
?>