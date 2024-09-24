<?php
session_start();
    if(empty($_SESSION)){
        echo"<script>location.href='home';</script>";
    }

    include_once('../conexao.php');
    $logado =$_SESSION['iemail'];
    $sql = "select * from produtos";
    $result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listando produtos</title>
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
        .backBtn {
                position: absolute;
                color: black;
                border: none;
                border-radius: 50%;
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;
                font-size: 20px;
    }

    </style>
</head>
<body>
    <main>
        <div class="listProd">
            <table class="tbProd">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Valor</td>
                    <td>Descrição</td>
                    <td>Imagem</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
                <?php
                    while($user_data =mysqli_fetch_assoc($result)){
                        echo"<tr>";
                        echo"<td>".$user_data['cod_produto']."</td>";
                        echo"<td>".$user_data['nome']."</td>";
                        echo"<td>".$user_data['valor']."</td>";
                        echo"<td>".$user_data['descricao']."</td>";
                        echo"<td>".$user_data['imagem']."</td>";
                        echo"<td><a href=editProd'?cod_produto=$user_data[cod_produto]'><img src='../../estilos/icons/escrever.png'></a> </td>";
                        echo "<td><a href='delProd.php ?cod_produto={$user_data['cod_produto']}' onclick='return confirmarExclusao(event);'><img src='../../estilos/icons/excluir.png' alt='Excluir'/></a></td>";
                        echo"</tr>";
                    }
                ?>
            </table>
        </div>
    </main>
    <script >
        function confirmarExclusao(event) {
            var confirmar = confirm("Você tem certeza que deseja excluir este item?");
            return confirmar;
        }
    </script>

</body>
</html>