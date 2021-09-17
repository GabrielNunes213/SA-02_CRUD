<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Especialidade</title>
    <style>
        a {
            text-decoration: none;
            color: black;
            font-size: 20px; 
        }

        button {
            background-color: #D3D3D3;
            border-radius: 10px;
            width: 250px;
        }

        table {
            text-align: center;
        }
    </style>
</head>
<body>
    
    <center>
    <h2>Tabela Especialidade</h2>
    <table width="467" border="1px">
        <tr>
            <td>ID Especialidade</td>
            <td>Nome Especialidade</td>
        </tr>

        <?php
            $con = new PDO("mysql:host=localhost;dbname=Banco_Sa_02", "root", "");

            $cmd = $con->query("SELECT * FROM CadastroEspecialidade");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_especialidade']."</td>";
                echo "<td>".$valor['nome_especialidade']."</td>";
                echo "</tr>";
            }
        ?>
        
        
    </table>
    <br><br>
    <button><a href="CadastrarEspecialidade/indexEspecialidade.html">Cadastrar Especialidade</a></button>
    <br>
    <br>
    <button><a href="DeletarEspecialidade/Delete.html">Apagar Especialidade</a></button>
    <br>
    <br>
    <button><a href="AtualizarEspecialidade/AtualizarEsp.html">Atualizar Especialidade</a></button>

    </center>

</body>
</html>