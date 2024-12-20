<?php
require_once("conexao.php")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="shortcut icon" href="../estilos/icons/biblia.png" type="image/x-icon">
    <style>
        *{
            margin: 0px;
            padding: 0px;
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
        .cad{
            margin-top: 10px;
            margin-bottom: 10px;
        }
        body{
            background-color: #c0c0c028;
        }
        main{
            width: 1300px;
            margin-bottom: 10px;
            border-radius: 0 0 20px 20px;
            text-align: center;
        }
        div.main_div , .login{
            display: inline-flex;
            width: 50px;
            height: 50px;
        }

        .div_btn{
            flex: auto;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
            margin-left: 150px;
        }
        .div_btn:hover{
            background-color: #333;
            font-size: 1.3em;
            color: blue;
            text-decoration: underline;
        }
        a{
            text-decoration: none;
            color: black;
        }
        footer{
            background-image: linear-gradient(to bottom, #c0c0c0,#383737ab );
        }
        header{
            background: linear-gradient(to left,#747070, #C0C0C0);
        }
        #main_header{
            height: 150px;
            background: linear-gradient('c0c0c0');
            padding: 10px;
        }
        .logoHeader{
            width: 150px;
            height: 150px;
        }
        .logoPrinc{
            width: 150px;
            height: 150px;}
        .login{
            display: flex;
            position: relative;
            justify-content: right;
            align-items: center;
         }
         div.main_div , .login{
            display: inline-flex;
        }
        #logo_header{
            flex: auto;
        }
        .div_btn{
            flex: auto;
            justify-content: center;
            align-items: center;
            margin-top: 70px;
            margin-left: 270px;
        }
        .div_btn:hover{
            font-size: 1.3em;
            color: blue;
            text-decoration: underline;
        }
        .login{
            flex: auto;
        }
    </style>
</head>
<body>
<header id="main_header">
        <div class="main_div">
            <div class="logoHeader">
                <a href="home.html"><img src="../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
            </div>
            <div class="div_btn">
                <a href="">Home</a>
            </div>
            <div class="div_btn">
                <a href="">Produtos</a>
            </div>
            <div class="div_btn">
                <a href="">Carrinho</a>
            </div>
        </div>
    </header>
    <div class="cad">
        <form action="cadastrar.php" method="POST">
            <fieldset>
                <legend>Dados pessoais</legend>
                <p>
                    <label for="inome">Nome: </label>
                    <input type="text" name="inome" id="inome" placeholder="Seu nome:" required>
                </p>
                <p>
                    <label for="iemail">E-mail: </label>
                    <input type="email" name="iemail" id="iemail" placeholder="email@gmail.com" required>
                </p>
                <p>
                    <label for="itel">Telefone: </label>
                    <input type="tel" name="itel" id="itel" placeholder="(xx) xxxx-xxxx">
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
                        <input type="text" name="isenha" id="isenha" placeholder="Sua senha:" autocomplete="current-password" minlength="5" maxlength="10" required>
                    </p>
                    <p>
                        <input type="submit" value="Cadastrar" name="submit">
                    </p>
                </fieldset>
            </fieldset>
        </form>
    </div>
</body>
</html>