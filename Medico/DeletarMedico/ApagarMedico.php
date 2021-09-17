<?php

$id_Medico = $_POST['idmed'];

require_once('ConexaoDeletarM.php');

$del = $con->prepare("DELETE FROM CadastroMedico WHERE id_medico = :id");
$del->bindParam(":id", $id_Medico);
$del->execute();

echo "Medico Deletado com Sucesso!";
?>