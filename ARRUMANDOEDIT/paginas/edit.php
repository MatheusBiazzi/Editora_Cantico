<?php
if(!empty($_GET['cod_pessoa'])){
include_once('conexao.php');
$cod_pessoa = $_GET['cod_pessoa'];
$sqlconsulta = "select * from pessoas where cod_pessoa=$cod_pessoa";
$result = $conn->query($sqlconsulta);

print_r($result);
if($result->num_rows>0){
    while($user_data = mysqli_fetch_assoc($result)){    
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
    print_r($nome);
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
            footer{
                background-image: linear-gradient(to bottom, #c0c0c0,#383737ab );
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
                
                    <label for="inome">Nome: </label>
                    <input type="text" name="nome" id="inome" value="<?php echo $nome?>" required>
                
                <p>
                    <label for="iemail">E-mail: </label>
                    <input type="email" name="iemail" id="iemail" value="<?php echo $email?>" required>
                </p>
                <p>
                    <label for="itel">Telefone: </label>
                    <input type="tel" name="itel" id="itel" value="<?php echo $tel?>">
                </p>
                <p>
                    <label for="inasc">Data de nascimento: </label>
                    <input type="date" name="inasc" id="inasc" value="<?php echo $data_nasc?>" required>
                </p>
                <fieldset>
                    <legend>Informações de endereço:</legend>
                    <p>
                        <label for="icep">CEP: </label>
                        <input type="text" name="icep" id="icep" value="<?php echo $cep?>" required>
                    </p>
                    <p>
                        <label for="irua">Rua:</label>
                        <input type="text" name="irua" id="irua" value="<?php echo $rua?>" required>
                    </p>
                    <p>
                        <label for="inumCasa">Número da casa: </label>
                        <input type="text" name="inumCasa" id="inumCasa" value="<?php echo $numCasa?>" required>
                    </p>
                    <p>
                        <label for="ibairro">Bairro: </label>
                        <input type="text" name="ibairro" id="ibairro" value="<?php echo $bairro?>" required>
                    </p>
                    <p>
                        <label for="icomple">Complemento: </label>
                        <input type="text" name="icomple" id="icomple" value="<?php echo $comple?>">
                    </p>
                    <p>
                        <label for="isenha">Crie sua senha: </label>
                        <input type="text" name="isenha" id="isenha" value="<?php echo $senha?>">
                    </p>
                    <p>
                        <input type="hidden" name="id" value="<?php echo $id ?>">
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