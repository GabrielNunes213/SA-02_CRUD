<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Procedimento</title>
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

    <h2>Tabela Procedimento</h2>
    <table width="467" border="1px">
        <tr>
            <td>ID Procedimento</td>
            <td>Codigo</td>
            <td>Nome Procedimento</td>
            <td>Valor</td>
            <td>Gênero</td>
            <td>Adicionar Exceção</td>
        </tr>

        <?php
            $con = new PDO("mysql:host=localhost;dbname=Banco_Sa_02", "root", "");

            $cmd = $con->query("SELECT * FROM CadastroProcedimento");
            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($res as $valor){
                echo "<tr>";
                echo "<td>".$valor['id_procedimento']."</td>";
                echo "<td>".$valor['codigo']."</td>";
                echo "<td>".$valor['nomeproc']."</td>";
                echo "<td>".$valor['valor']."</td>";
                echo "<td>".$valor['genero']."</td>";
                echo "<td>".$valor['addexcecao']."</td>";
                echo "</tr>";
            }
        ?>
        
        
    </table>
    <br><br>
    <button><a href="CadastrarProcedimento/indexProcedimento.html">Cadastrar Procedimento</a></button>
    <br>
    <br>
    <button><a href="DeletarProcedimento/DeletarProcedimento.html">Apagar Procedimento</a></button>
    <br>
    <br>
    <button><a href="AtualizarProcedimento/AtualizarPROC.html">Atualizar Procedimento</a></button>

    </center>

</body>
</html>