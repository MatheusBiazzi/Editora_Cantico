<?php
    session_start();
    if(empty($_POST) or (empty($_POST["iemail"]) or (empty($_POST["isenha"])))){
        echo "<script> location.href='home.html';</script>";
    }
    include("conexao.php");
    $iemail = $_POST["iemail"];
    $isenha = $_POST["isenha"];
    $sql = "select * from pessoas where email = '{$iemail}'
    AND senha ='{$isenha}'";
    $res = $conn->query($sql) or die($conn->error);   
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
    if($qtd > 0){
        $_SESSION["iemail"] = $iemail;
        $_SESSION["nome"] = $row->nome;
        echo"<script> location.href='home.html';</script>";
    }else{
        echo"<script>alert('Email ou senha invalido');</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora Cântico</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="shortcut icon" href="../estilos/icons/iconVaticano.ico" type="image/x-icon">
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
    <main>
        <article>
            <h1>Seu lugar de descanso do mundo...</h1>
            <p>
                <a href="listar.php">Listar</a>
            </p>
        </article>
    </main>
    <footer>
        <p id="autorSite">&copy; Matheus H. Biazzi</p>
    </footer>
</body>
</html>