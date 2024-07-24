<?php
    session_start();
    if(empty($_POST) or (empty($_POST["iemail"]) or (empty($_POST["isenha"])))){
        echo "<script> location.href='index.php';</script>";
    }
    include("conexao.php");
    $iemail = $_POST["iemail"];
    $isenha = $_POST["isenha"];
    $sql = "select * from cliente where iemail = '{$iemail}'
    AND isenha ='{$isenha}'";
    $res = $conn->query($sql) or die($conn->error);   
    $row = $res->fetch_object();
    $qtd = $res->num_rows;
    if($qtd > 0){
        $_SESSION["iemail"] = $iemail;
        $_SESSION["nome"] = $row->nome;
        echo"<script> location.href='dashboard.php';</script>";
    }else{
        echo"<script>alert('iemail ou isenha invalido');</script>";
        echo"<script>location.href='index.php';</script>";
    }
    echo ""
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"seja bem vindo ".$_SESSION["nome"];
        print"<a href='logout.php'> sair</a>";
    ?>
    <p>ajodjajdojoljkopk</p>
</body>
</html>