<?php

$idESP = htmlspecialchars($_POST['idesp']);
$nomeESP = htmlspecialchars($_POST['nomeesp']);

require_once 'ConexaoAtualizarE.php';

    if(!empty($nomeESP)){
    $atualizar = $con->prepare("UPDATE CadastroEspecialidade SET nome_especialidade = :n WHERE id_especialidade = :id");
    $atualizar->bindParam(":id", $idESP);
    $atualizar->bindParam(":n", $nomeESP);
    $atualizar->execute();
    }

    Echo "Especialidade Atualizada com Sucesso!";
?>