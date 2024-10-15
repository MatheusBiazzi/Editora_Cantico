<?php
if(!empty($_GET['cod_produto'])){
    include_once('../conexao.php');
    $cod_produto = $_GET['cod_produto'];
    $sqlconsulta = "select * from produtos where cod_produto=$cod_produto";
    $result = $conn->query($sqlconsulta);
    
    if($result->num_rows>0){
        while($user_data = mysqli_fetch_assoc($result)){    
            $cod_produto = $user_data['cod_produto'];
            $nomeProd = $user_data['nome'];
            $valProd = $user_data['valor'];
            $descProd = $user_data['descricao'];
            $imagProd = $user_data['imagem'];
        }
    }else{
        header('Location: ../paginas/listar.php');
    }}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando produtos</title>
    <link rel="shortcut icon" href="../../estilos/icons/biblia.png" type="image/x-icon">
    <style>
        *{
            margin: 0px;
            padding: 0px;
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
            justify-content: center;
            flex: auto;
        }
        .div_btn:hover{
            font-size: 1.3em;
            color: blue;
            text-decoration: underline;
        }
        #div_btn{
            flex:auto;
        }
        /* forms*/
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .form-container {
            width: 42%;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
        }

        legend {
            font-size: 1.5em;
            font-weight: bold;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"] {
            width: 96%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
        }

        input[type="submit"] {
            background-color: #0073e6;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #005bb5;
        }

        .form-title {
            text-align: center;
            font-size: 2em;
            font-weight: bold;
            margin-bottom: 30px;
            color: #444;
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
                <a href="listar.php">Listar</a>
            </div>
            <div class="div_btn">
                <a href="../paginas/produtos/cadProd.php">Cadastrar produtos</a>
            </div>
            <div class="div_btn">
                <a href="../paginas/produtos/listProd.php">Listar produtos</a>
            </div>
            <div class="div_btn">
                  <img src="../../estilos/icons/usu.png" alt="login">
            </div>
        </div>
    </header>

    <main>
    <div class="form-container">
        <div class="form-title">Alterar Produto</div>
        <form action="altProd.php" method="post">
            <fieldset>
                <legend>Dados do Produto</legend>

                <p>
                    <label for="nome">Nome do produto:</label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nomeProd ?>" required>
                </p>

                <p>
                    <label for="valor">Valor do produto:</label>
                    <input type="number" name="valor" id="valor" value="<?php echo $valProd ?>" required>
                </p>

                <p>
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" id="descricao" value="<?php echo $descProd ?>">
                </p>

                <p>
                    <label for="imagem">Adicionar imagem:</label>
                    <input type="file" name="imagem" id="imagem" value="<?php echo $imagProd ?>" required>
                </p>

                <input type="hidden" name="cod_produto" value="<?php echo $cod_produto ?>">

                <p>
                    <input type="submit" value="Alterar" name="update">
                </p>
            </fieldset>
        </form>
    </div>
    </main>
</body>
</html>