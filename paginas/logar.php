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
    }else{
        echo"<script>alert('Email ou senha invalido');</script>";
        echo"<script>location.href='login.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editora Cântico</title>
    <link rel="stylesheet" href="../estilos/style.css">
    <link rel="shortcut icon" href="../estilos/icons/biblia.png" type="image/x-icon">
    <style>
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
        p{
            text-align: center;
        }
        .main_div{
            display: flex;
        }
        .div_btn{
            margin-top: 70px;
            justify-content: center;
            flex: auto;
        }
        .div_btn:hover{
            font-size: 1.3em;
            color: blue;
            text-decoration: underline;
        }
        #div_btn{
            flex:auto;
        }

    </style>
</head>
<body>
    <header id="main_header">
        <div class="main_div">
            <div id="div_btn">
                <a href="home.html"><img src="../estilos/imagens/logoCantico.png" alt="Logo Editora Cântico" class="logoPrinc"></a>
            </div>
            <div class="div_btn">
                <a href="listar.php">Listar</a>
            </div>
            <div class="div_btn">
                <a href="../paginas/produtos/cadProd.php">Cadastrar produtos</a>
            </div>
            <div class="div_btn">
                <a href="../paginas/produtos/listProd.php">Listar produtos</a>
            </div>
            <div class="div_btn">
                  <img src="../estilos/icons/usu.png" alt="login">
            </div>
        </div>
    </header>
    <main>
        <article>
            <h1>Seu lugar de descanso do mundo...</h1>


        </article>
    </main>
    <footer>
        <p id="autorSite">&copy; Matheus H. Biazzi</p>
    </footer>
</body>
</html>