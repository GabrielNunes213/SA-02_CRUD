<?php
    try {
        $inserir = new PDO("mysql:host=localhost;dbname=Banco_Sa_02", "root", "");
    } catch (PDOException $m) {
        echo "Ocorreu um erro no banco de dados: " . $m->getMessage();
    }
?>