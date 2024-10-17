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
    <link rel="shortcut icon" href="../../estilos/icons/biblia.png" type="image/x-icon">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
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
        header{
             display: flex;
             background-image: linear-gradient(to right, #c0c0c0,#383737da );
        }
        header>div{
            flex: auto;
        }
        .logoHeader{
            width: 150px;
            height: 150px;
        } 
        .logoPrinc{
            width: 150px;
            height: 150px;
        }
        .main_div{
            display: flex;
        }
        .div_btn{
            margin-top: 70px;
            justify-content: space-between;
            flex: auto;
        }
        a{
            text-decoration: none;
            color: black;
        }
        .div_btn:hover{
            font-size: 1.3em;
            color: blue;
            text-decoration: underline;
        }
        #div_btn{
            flex:auto;
        }
        main{
            padding: 20px;
        }

    </style>
</head>
<body>
<header id="main_header">
        <div class="main_div">
            <div id="div_btn">
                <a href="../home.html"><img src="../../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
            </div>
            <div class="div_btn">
                <a href="../listar.php">Listar</a>
            </div>
            <div class="div_btn">
                <a href="../../paginas/produtos/cadProd.php">Cadastrar produtos</a>
            </div>
            <div class="div_btn">
                <a href="../../paginas/produtos/listProd.php">Listar produtos</a>
            </div>
            <div class="div_btn">
                  <img src="../../estilos/icons/usu.png" alt="login">
            </div>
        </div>
    </header>
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
                        // Verificar se o caminho da imagem é correto
                        //echo "<td>".$user_data['imagem']."</td>";  // Exibe o caminho da imagem para depuração
                        // Exibir a imagem se o caminho estiver correto
                         if (file_exists($user_data['imagem'])) {
                            echo "<td><img src='".$user_data['imagem']."' alt='Imagem do Produto' style='width:100px; height:100px;'></td>";
                        } else {
                            echo "<td>Imagem não encontrada</td>";
                        }

                        echo"
                        <td>
                        <a href='editProd.php?cod_produto={$user_data['cod_produto']}'>
                        <img src='../../estilos/icons/escrever.png'>
                        </a> 
                        </td>";

                        echo "<td><a href='delProd.php?cod_produto={$user_data['cod_produto']}' onclick='return confirmarExclusao(event);'><img src='../../estilos/icons/excluir.png' alt='Excluir'/></a></td>";
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
<!--
<div class="product-container">
    // <div class="product-card" value="<?php echo $cod_produto ?>">
        <img src="../estilos/imagens/capaCatolico.jpeg" alt="Título do Livro" class="product-image">
        <div class="product-info">
            <h2 class="product-title" value="<?php echo $nome?>"></h2>
            <p class="product-author" value="<?php echo $descricao?>"></p>
            <p class="product-price" ><?php echo $valor?>"</p>
            <a href="#" class="buy-button">Comprar</a>
        </div>
  //  </div>
</div>-->
</body>
</html>