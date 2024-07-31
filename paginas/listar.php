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
</head>
<body>
<br>
<br>
    <?php
        echo"LISTANDO DADOS DA TABELA CLIENTE";
        echo"<br>";
        echo"<a href='logOut.php'> Sair </a>";
    ?>
    <div>
        <table border="2">
        <tr>
            <td>nome</td>
            <td>email</td>
            <td>telefone</td>
            <td>datan</td>
            <td>cidade</td>
            <td>editar</td>
            <td>excluir</td>
        </tr>
        <?php
        while($user_data = mysqli_fetch_assoc($result))
        {
            echo"<tr>";
            echo"<td>".$user_data['nome']."</td>";
            echo"<td>".$user_data['email']."</td>";
            echo"<td>".$user_data['telefone']."</td>";
            echo"<td>".$user_data['dt_nasc']."</td>";
            echo"<td>".$user_data['cep']."</td>";
            echo"<td><a href='#'><img src='../estilos/icons/escrever.png'/></a></td>";
            echo"<td><a href='#'><img src='../estilos/icons/excluir.png'/></a></td>";
            echo"</tr>";

        }
        ?>
        </table>
    </div>
</body>
</html>