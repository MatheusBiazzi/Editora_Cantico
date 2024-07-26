<?php
    session_start();
    if(empty($_POST) or (empty($_POST["iemail"]) or (empty($_POST["isenha"])))){
        echo "<script> location.href='index.php';</script>";
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
    echo "Logado"
?>