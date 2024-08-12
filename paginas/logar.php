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
        $_SESSION["inome"] = $row->nome;
    }else{
        echo"<script>alert('Email ou senha inválidos');</script>";
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
    <style>
        header{
            display: flex;
        }
        div{
            flex: auto;
        }
        .tLogBtn{
  
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 12px;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s ease;
  
}
.tLogBtn:hover {
  background-color: #0056b3;
}
.backBtn {
          position: absolute;
          color: black;
          border: none;
          border-radius: 50%;
          width: 40px;
          height: 40px;
          display: flex;
          align-items: center;
          justify-content: center;
          cursor: pointer;
          font-size: 20px;
}
    </style>
</head>
<body>
    <header id="main_header">
        <div class="logoHeader">
            <a href="home.html"><img src="../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
        </div>
        <button class="backBtn" onclick="window.history.back();">&larr;</button>
        <div class="login">
              <img src="../estilos/icons/usu.png" alt="login">
        </div>
        <div>
            <a href="listar.php">Listar</a>
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