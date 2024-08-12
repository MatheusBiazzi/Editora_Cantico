<?php
if(!empty($_POST['cod_pessoa'])){
include_once('conexao.php');
$id = $_POST['cod_pessoa'];
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
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
        /* styles.css */
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

    </style>
</head>
<body>
    <div class="box">
        <form action="atualizar.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>"required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>"required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>