<?php
if(!empty($_GET['cod_pessoa'])){
include_once('conexao.php');
$cod_pessoa = $_GET['cod_pessoa'];
$sqlconsulta = "select * from pessoas where cod_pessoa=$cod_pessoa";
$result = $conn->query($sqlconsulta);

if($result->num_rows>0){
    while($user_data = mysqli_fetch_assoc($result)){    
        $cod_pessoa = $user_data['cod_pessoa'];
        $nome = $user_data['nome'];
        $email = $user_data['email'];
        $tel = $user_data['telefone'];
        $data_nasc =$user_data['dt_nasc'];
        $cep = $user_data['cep'];
        $rua = $user_data['rua'];
        $numCasa = $user_data['numero'];
        $bairro = $user_data['bairro'];
        $comple = $user_data['complemento'];
        $senha = $user_data['senha'];
    }
}else{
    header('Location: listar.php');
}}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando</title>
    <link rel="shortcut icon" href="../estilos/icons/biblia.png" type="image/x-icon">
    <link rel="stylesheet" href="../estilos/style.css">
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
            header{
                display: flex;
                background: linear-gradient(to left,#747070, #C0C0C0);
            }
            header>div{
                flex: auto;
            }
            a{
                text-decoration: none;
                color: black;
            }
            span>a:hover{
                text-decoration: underline;
                color: gold;
                font-size: 18px;
            }
    </style>
</head>
<body>
    <header id="main_header">
        <div class="logoHeader">
            <a href="home.html"><img src="../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
        </div>
        <div class="login">
              <img src="../estilos/icons/usu.png" alt="login">
        </div>
    </header>
    <div class="cad">
        <form action="atualizar.php" method="POST">
            <fieldset>
                <legend>Dados pessoais</legend>
                
                    <label for="nome">Nome: </label>
                    <input type="text" name="nome" id="nome" value="<?php echo $nome?>" required>
                
                <p>
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" id="email" value="<?php echo $email?>" required>
                </p>
                <p>
                    <label for="telefone">Telefone: </label>
                    <input type="tel" name="telefone" id="telefone" value="<?php echo $tel?>">
                </p>
                <p>
                    <label for="dt_nasc">Data de nascimento: </label>
                    <input type="date" name="dt_nasc" id="dt_nasc" value="<?php echo $data_nasc?>" required>
                </p>
                <fieldset>
                    <legend>Informações de endereço:</legend>
                    <p>
                        <label for="cep">CEP: </label>
                        <input type="text" name="cep" id="cep" value="<?php echo $cep?>" required>
                    </p>
                    <p>
                        <label for="rua">Rua:</label>
                        <input type="text" name="rua" id="rua" value="<?php echo $rua?>" required>
                    </p>
                    <p>
                        <label for="numero">Número da casa: </label>
                        <input type="text" name="numero" id="numero" value="<?php echo $numCasa?>" required>
                    </p>
                    <p>
                        <label for="bairro">Bairro: </label>
                        <input type="text" name="bairro" id="bairro" value="<?php echo $bairro?>" required>
                    </p>
                    <p>
                        <label for="complemento">Complemento: </label>
                        <input type="text" name="complemento" id="complemento" value="<?php echo $comple?>">
                    </p>
                    <p>
                        <label for="senha">Nova senha: </label>
                        <input type="text" name="senha" id="senha" value="<?php echo $senha?>">
                    </p>
                    <p>
                        <input type="hidden" name="cod_pessoa" value="<?php echo $cod_pessoa ?>">
                    </p>
                    <p>
                        <input type="submit" name="update" id="update">
                    </p>
                </fieldset>
            </fieldset>
        </form>
    </div>
</body>
</html>