<?php

$id_especialidade = $_POST['idesp'];

require_once('ConexaoDeletarE.php');

$del = $con->prepare("DELETE FROM CadastroEspecialidade WHERE id_especialidade = :id");
$del->bindParam(":id", $id_especialidade);
$del->execute();

echo "Especialidade Deletada com Sucesso!";
?>