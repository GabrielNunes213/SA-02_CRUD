<?php

$nome = htmlspecialchars($_POST['nome']) ;
$rua = htmlspecialchars($_POST['rua']);
$numero = htmlspecialchars($_POST['numerorua']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$complemento = htmlspecialchars($_POST['complemento']);
$email = htmlspecialchars($_POST['email']);
$celular = htmlspecialchars($_POST['celular']);
$telefonefixo = htmlspecialchars($_POST['telefonefixo']);
$telefonesecundario = htmlspecialchars($_POST['telefonesecundario']);

require_once('ConexaoCadastrarM.php');

$ins = $inserir->prepare("INSERT INTO Cadastromedico (nome, rua, numero, bairro, cep, complemento, email, celular, telefonefixo, telefonesecundario) VALUES (:n, :r, :num, :b, :cep, :comp, :e, :cel, :telef, :teles)");
$ins->bindParam(":n", $nome);
$ins->bindParam(":r", $rua);
$ins->bindParam(":num", $numero);
$ins->bindParam(":b", $bairro);
$ins->bindParam(":cep", $cep);
$ins->bindParam(":comp", $complemento);
$ins->bindParam(":e", $email);
$ins->bindParam(":cel", $celular);
$ins->bindParam(":telef", $telefonefixo);
$ins->bindParam(":teles", $telefonesecundario);
$ins->execute();

Echo "Medico cadastrado com sucesso!";

?>