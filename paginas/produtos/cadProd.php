<?php
require_once('../conexao.php')
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado de produtos</title>
    <link rel="shortcut icon" href="../../estilos/icons/biblia.png" type="image/x-icon">
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;

        }

        .form-container {
            width: 43%;
            margin: 17px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        fieldset {
            border: 1px solid #ccc;
            padding: 20px;
        }

        legend {
            font-size: 1.3em;
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
            margin-left: 255px;
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

    </style>
</head>
<body>
    <header id="main_header">
        <div class="main_div">
            <div id="div_btn">
                <a href="home.html"><img src="../../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
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
    <div class="form-container">
        <div class="form-title">Cadastrar Produto</div>
        <form action="newCad.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Dados do Produto</legend>

                <p>
                    <label for="nome">Nome do produto:</label>
                    <input type="text" name="nome" id="nome" required>
                </p>

                <p>
                    <label for="valor">Valor do produto:</label>
                    <input type="number" name="valor" id="valor" required>
                </p>

                <p>
                    <label for="descricao">Descrição:</label>
                    <input type="text" name="descricao" id="descricao">
                </p>

                <p>
                    <label for="imagem">Adicionar imagem:</label>
                    <input type="file" name="imagem" id="imagem">
                </p>

                <p>
                    <input type="submit" value="Cadastrar" name="submit">
                </p>
            </fieldset>
        </form>
    </div>
    </main>

</body>
</html>