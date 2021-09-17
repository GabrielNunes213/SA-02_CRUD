<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=Banco_Sa_02", "root", "");
    } catch (PDOException $p) {
        echo "Ocorreu um erro no banco de dados: " . $p->getMessage();
    }
?>