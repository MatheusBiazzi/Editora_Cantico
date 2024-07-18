<?php
require_once("conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="shortcut icon" href="../estilos/icons/usu.png" type="image/x-icon">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            max-width: 600px;
            margin: 0 auto;
        }
        fieldset {
            border: none;
            margin: 0;
            padding: 0;
        }
        legend {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"] {
            width: calc(100% - 12px);
            padding: 6px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 1em;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="date"]:focus {
            outline: none;
            border-color: #66afe9;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
            font-size: 1em;
            width: 100%;

        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header id="main_header">
        <div class="logoHeader">
            <a href="home.html"><img src="../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
        </div>
    </header>
    <form action="cadastrar.php" method="POST">
        <fieldset>
            <legend>Dados pessoais</legend>
            <p>
                <label for="inome">Nome: </label>
                <input type="text" name="inome" id="inome" required>
            </p>
            <p>
                <label for="iemail">E-mail: </label>
                <input type="email" name="iemail" id="iemail" required>
            </p>
            <p>
                <label for="itel">Telefone: </label>
                <input type="tel" name="itel" id="itel">
            </p>
            <p>
                <label for="inasc">Data de nascimento: </label>
                <input type="date" name="inasc" id="inasc" required>
            </p>
            <fieldset>
                <legend>Informações de endereço:</legend>
                <p>
                    <label for="icep">CEP: </label>
                    <input type="text" name="icep" id="icep" required>
                </p>
                <p>
                    <label for="irua">Rua:</label>
                    <input type="text" name="irua" id="irua" required>
                </p>
                <p>
                    <label for="inumCasa">Número da casa: </label>
                    <input type="text" name="inumCasa" id="inumCasa" required>
                </p>
                <p>
                    <label for="ibairro">Bairro: </label>
                    <input type="text" name="ibairro" id="ibairro" required>
                </p>
                <p>
                    <label for="icomple">Complemento: </label>
                    <input type="text" name="icomple" id="icomple">
                </p>
                <p>
                    <label for="isenha">Crie sua senha: </label>
                    <input type="text" name="isenha" id="isenha">
                </p>
                <p>
                    <input type="submit" value="Cadastrar" name="submit">
                </p>
            </fieldset>

        </fieldset>
    </form>
    <footer>
        <p id="autorSite">&copy; Matheus H. Biazzi</p>
    </footer>
</body>
</html>