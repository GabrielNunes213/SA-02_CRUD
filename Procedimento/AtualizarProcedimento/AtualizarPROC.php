<?php

$id_Procedimento = htmlspecialchars($_POST ['idproc']);
$codigo = htmlspecialchars($_POST['Codigo']);
$nomeproc = htmlspecialchars($_POST['nomeproc']);
$valor = htmlspecialchars($_POST['valor']);
$genero = htmlspecialchars($_POST['Genero']);
$addexcecao = htmlspecialchars($_POST['Excecao']);


require_once('ConexaoAtualizarP.php');

    if(!empty($codigo)){
        $atcodigo = $con->prepare("UPDATE CadastroProcedimento SET codigo = :c WHERE id_procedimento = :id");
        $atcodigo->bindParam(":id", $id_Procedimento);
        $atcodigo->bindParam(":c", $codigo);
        $atcodigo->execute();
    }

    if(!empty($nomeproc)){
        $atnomeproc = $con->prepare("UPDATE CadastroProcedimento SET nomeproc = :np WHERE id_procedimento = :id");
        $atnomeproc->bindParam(":id", $id_Procedimento);
        $atnomeproc->bindParam(":np", $nomeproc);
        $atnomeproc->execute();
    }

    if(!empty($valor)){
        $atvalor = $con->prepare("UPDATE CadastroProcedimento SET valor = :v WHERE id_procedimento = :id");
        $atvalor->bindParam(":id", $id_Procedimento);
        $atvalor->bindParam(":v", $valor);
        $atvalor->execute();
    }

    if(!empty($genero)){
        $atgenero = $con->prepare("UPDATE CadastroProcedimento SET genero = :g WHERE id_procedimento = :id");
        $atgenero->bindParam(":id", $id_Procedimento);
        $atgenero->bindParam(":g", $genero);
        $atgenero->execute();
    }

    if(!empty($addexcecao)){
        $ataddexcecao = $con->prepare("UPDATE CadastroProcedimento SET addexcecao = :addexc WHERE id_procedimento = :id");
        $ataddexcecao->bindParam(":id", $id_Procedimento);
        $ataddexcecao->bindParam(":addexc", $addexcecao);
        $ataddexcecao->execute();
    }

    Echo "Procedimento Atualizado com Sucesso!";
?>