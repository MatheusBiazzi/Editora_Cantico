<?php
    session_start();
    
    if(empty($_SESSION)){
        echo"<script>location.href='home.html';</script>";
    }

    include_once('conexao.php');
    $logado =$_SESSION['iemail'];
    $sql = "select * from pessoas";
    $result = $conn->query($sql);
    //print_r($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar dados</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        img {
            width: 20px;
            height: 20px;
            vertical-align: middle;
        }

    </style>
</head>
<body>
    <div>
        <table>
        <tr>
        <td>Codigo</td>
            <td>Nome</td>
            <td>E-mail</td>
            <td>Telefone</td>
            <td>Data de Nascimento</td>
            <td>Cep</td>
            <td>Rua</td>
            <td>Número</td>
            <td>Bairro</td>
            <td>Complemento</td>
            <td>senha</td>
            <td>Editar</td>
            <td>Excluir</td>

        </tr>
        <?php
        while($user_data = mysqli_fetch_assoc($result)){
            echo"<tr>";
            echo"<td>".$user_data['cod_pessoa']."</td>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['telefone']."</td>";
            echo"<td>".$user_data['dt_nasc']."</td>";
            echo"<td>".$user_data['cep']."</td>";
            echo"<td>".$user_data['rua']."</td>";
            echo"<td>".$user_data['numero']."</td>";
            echo"<td>".$user_data['bairro']."</td>";
            echo"<td>".$user_data['complemento']."</td>";
            echo"<td>".$user_data['senha']."</td>";
            echo"
            <td>
            <a href='edit.php?cod_pessoa=$user_data[cod_pessoa]'>
            <img src='../estilos/icons/escrever.png'>
            </a> 
            </td>";
            echo "<td><a href='delete.php?cod_pessoa={$user_data['cod_pessoa']}' onclick='return confirmarExclusao(event);'><img src='../estilos/icons/excluir.png' alt='Excluir'/></a></td>";
            echo"</tr>";
        }
        ?>
        </table>
    </div>
    <p><a href="logar.php">Voltar a pagína de login</a></p>
    <p><a href='logOut.php'>Deslogar</a></p>

    <script>
        function confirmarExclusao(event) {
            var confirmar = confirm("Você tem certeza que deseja excluir este item?");
            return confirmar;
        }
    </script>
</body>
</html>