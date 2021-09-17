<?php

$id_Procedimento = $_POST['idproc'];

require_once('ConexaoDeletarP.php');

$del = $con->prepare("DELETE FROM CadastroProcedimento WHERE id_procedimento = :id");
$del->bindParam(":id", $id_Procedimento);
$del->execute();

echo "Procedimento Deletado com Sucesso!";
?>