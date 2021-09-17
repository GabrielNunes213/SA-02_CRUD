<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Medicos</title>
    <style>
        a {
            text-decoration: none;
            color: black;
            font-size: 20px; 
        }

        button {
            background-color: #D3D3D3;
            border-radius: 10px;
            width: 180px;
        }

        table {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <center>

    <h2>Tabela Medicos</h2>
    
    <table width="467" border="1px">
        <tr>
            <td>ID Medico</td>
            <td>Nome medico</td>
            <td>Rua</td>
            <td>Numero Casa</td>
            <td>Bairro</td>
            <td>Cep</td>
            <td>Complemento</td>
            <td>Email</td>
            <td>Celular</td>
            <td>Telefone Fixo</td>
            <td>Telefone Secundario</td>
        </tr>

        <?php
            $con = new PDO("mysql:host=localhost;dbname=Banco_Sa_02", "root", "");

            $cmd = $con->query("SELECT * FROM CadastroMedico");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_medico']."</td>";
                echo "<td>".$valor['nome']."</td>";
                echo "<td>".$valor['rua']."</td>";
                echo "<td>".$valor['numero']."</td>";
                echo "<td>".$valor['bairro']."</td>";
                echo "<td>".$valor['cep']."</td>";
                echo "<td>".$valor['complemento']."</td>";
                echo "<td>".$valor['email']."</td>";
                echo "<td>".$valor['celular']."</td>";
                echo "<td>".$valor['telefonefixo']."</td>";
                echo "<td>".$valor['telefonesecundario']."</td>";
                echo "</tr>";
            }
        ?>
        
        
    </table>
    <br><br>
    <button><a href="CadastrarMedico/indexmedico.html">Cadastrar Medico</a></button>
    <br>
    <br>
    <button><a href="DeletarMedico/DeletarMED.html">Apagar Medico</a></button>
    <br>
    <br>
    <button><a href="AtualizarMedico/AtualizarMED.html">Atualizar Medico</a></button>

    </center>

</body>
</html>