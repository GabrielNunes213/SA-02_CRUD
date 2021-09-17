<?php

$id_medico = htmlspecialchars($_POST['idmd']);
$nome = htmlspecialchars($_POST['nome']);
$rua = htmlspecialchars($_POST['rua']);
$numero = htmlspecialchars($_POST['numerorua']);
$bairro = htmlspecialchars($_POST['bairro']);
$cep = htmlspecialchars($_POST['cep']);
$complemento = htmlspecialchars($_POST['complemento']);
$email = htmlspecialchars($_POST['email']);
$celular = htmlspecialchars($_POST['celular']);
$telefonefixo = htmlspecialchars($_POST['telefonefixo']);
$telefonesecundario = htmlspecialchars($_POST['telefonesecundario']);

require_once('ConexaoAtualizarM.php');

    if(!empty($nome)){
        $atnome = $con->prepare("UPDATE CadastroMedico SET nome = :n WHERE id_medico = :id");
        $atnome->bindParam(":id", $id_medico);
        $atnome->bindParam(":n", $nome);
        $atnome->execute();
    }

    if(!empty($rua)) {
        $atrua = $con->prepare("UPDATE CadastroMedico SET rua = :r WHERE id_medico = :id");
        $atrua->bindParam(":id", $id_medico);
        $atrua->bindParam(":r", $rua);
        $atrua->execute();
    }

    if(!empty($numero)){
        $atnumero = $con->prepare("UPDATE CadastroMedico SET numero = :n WHERE id_medico = :id");
        $atnumero->bindParam(":id", $id_medico);
        $atnumero->bindParam(":n", $numero);
        $atnumero->execute();
    }

    if(!empty($bairro)){
        $atbairro = $con->prepare("UPDATE CadastroMedico SET bairro = :b WHERE id_medico = :id");
        $atbairro->bindParam(":id", $id_medico);
        $atbairro->bindParam(":b", $bairro);
        $atbairro->execute();
    }

    if(!empty($cep)){
        $atcep = $con->prepare("UPDATE CadastroMedico SET cep = :c WHERE id_medico = :id");
        $atcep->bindParam(":id", $id_medico);
        $atcep->bindParam(":c", $cep);
        $atcep->execute();
    }

    if(!empty($complemento)){
        $atcomplemento = $con->prepare("UPDATE CadastroMedico SET complemento = :co WHERE id_medico = :id");
        $atcomplemento->bindParam(":id", $id_medico);
        $atcomplemento->bindParam(":co", $complemento);
        $atcomplemento->execute();
    }

    if(!empty($email)){
        $atemail = $con->prepare("UPDATE CadastroMedico SET email = :e WHERE id_medico = :id");
        $atemail->bindParam(":id", $id_medico);
        $atemail->bindParam(":e", $email);
        $atemail->execute();
    }

    if(!empty($celular)){
        $atcelular = $con->prepare("UPDATE CadastroMedico SET celular = :ce WHERE id_medico = :id");
        $atcelular->bindParam(":id", $id_medico);
        $atcelular->bindParam(":ce", $celular);
        $atcelular->execute();
    }

    if(!empty($telefonefixo)){
        $attelfix = $con->prepare("UPDATE CadastroMedico SET telefonefixo = :tf WHERE id_medico = :id");
        $attelfix->bindParam(":id", $id_medico);
        $attelfix->bindParam(":tf", $telefonefixo);
        $attelfix->execute();
    }

    if(!empty($telefonesecundario)){
        $attelsec = $con->prepare("UPDATE CadastroMedico SET telefonesecundario = :ts WHERE id_medico = :id");
        $attelsec->bindParam(":id", $id_medico);
        $attelsec->bindParam(":ts", $telefonesecundario);
        $attelsec->execute();
    }

    Echo "Medico atualizado com sucesso!";
?>