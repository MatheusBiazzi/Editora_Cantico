<?php
if(!empty($_POST['cod_pessoa'])){
include_once('conexao.php');
$id = $_GET['cod_pessoa'];
$sqlconsulta = "select * from pessoas where id=$id";
$result = $conn->query($sqlconsulta);

print_r($result);
if($result->num_rows>0){
    while($user_data = mysqli_fetch_assoc($result)){    
    $nome =$user_data['nome'];
    $email =$user_data['email'];
    $telefone =$user_data['telefone'];
    $data_nasc =$user_data['dt_nasc'];
    $cidade =$user_data['cidade'];
    }
    print_r($nome);
}else{
    header('Location: listar.php');
}}
?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .box {
            width: 80%;
            max-width: 600px;
            margin: 2rem auto;
            padding: 1.5rem;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        legend {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #333;
        }
        .inputBox {
            margin-bottom: 1rem;
        }
        .labelInput {
            display: block;
            font-size: 1rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #555;
        }
        .inputUser {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            box-sizing: border-box;
        }
        .inputUser:focus {
            border-color: #007bff;
            outline: none;
        }
        p {
            margin: 0;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        body{
            background-color: #c0c0c028;
        }
        main{
            width: 1300px;
            margin-bottom: 10px;
            border-radius: 0 0 20px 20px;
            background: linear-gradient(to left,#747070, #C0C0C0);
            text-align: center;
        }
        header{
            display: flex;
            background-image: linear-gradient(to right, #c0c0c0,#383737da );
        }
        header>div{
            flex: auto;
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
    <div class="box">
        <form action="atualizar.php" method="POST">
            <fieldset>
                <legend><b>Atualizando dados</b></legend>
            
                <p class="inputBox">
                    <label for="nome" class="labelInput">Nome completo: </label>
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                </p>
            
                <p class="inputBox">
                    <label for="email" class="labelInput">Email: </label>
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>"required>
                </p>
            
                <p class="inputBox">
                    <label for="telefone" class="labelInput">Telefone: </label>
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                </p>
            
                <p>
                    <label for="data_nascimento">Data de Nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"required>
                </p>
                <p class="inputBox">
                    <label for="cidade" class="labelInput">Cidade: </label>
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>"required>
                </p>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
    <footer>

    </footer>
</body>
</html>