<?php
    session_start();
    if(empty($_POST) or (empty($_POST["iemail"]) or (empty($_POST["isenha"])))){
        echo "<script> location.href='index.php';</script>";
    }
    include("conexao.php");
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    $sql = "select * from pessoas where usuario = '{$email}'
    AND senha ='{$senha}'";
    $res = $conn->query($sql) or die($conn->error);   
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        echo"<script> location.href='dashboard.php';</script>";
    }else{
        echo"<script>alert('usuario ou senha invalido');</script>";
        echo"<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/style.css">
</head>
<body>
    <section class="mainCad">
        <form action="" method="post">
            <fieldset class="campCad">
                <legend>Login</legend>
                <p class="inpDados">
                    <label for="inome">Nome:</label>
                    <input type="text" name="inome" id="inome" required>
                </p>
                <p class="inpDados">
                    <label for="iemail">E-mail:</label>
                    <input type="email" name="iemail" id="iemail" required>
                </p>
            </fieldset>
        </form>
    </section>
</body>
</html>
