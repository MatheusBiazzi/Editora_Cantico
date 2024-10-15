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
    </style>
</head>
<body>
    <header id="main_header">
        <div class="logoHeader">
            <a href="../home.html"><img src="../../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
        </div>
    </header>
    <main>
        <div>
            <form action="cadastrarProd.php" method="post">
                <fieldset>
                    <legend>Dados do produtos</legend>
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
                        <input type="file" name="imagem" id="imagem" >
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