<?php
if(isset($_POST['submit'])){
    include_once('../conexao.php');
        
    $nomeProd = $_POST['nome'];
    $valProd = $_POST['valor'];
    $descProd = $_POST['descricao'];
    $imagProd = $_POST['imagem'];

    $result = mysqli_query($conn, "INSERT INTO produtos(nome, valor,descricao, imagem) values('$nomeProd','$valProd','$descProd','$imagProd')");

    echo "<script> location.href='listProd.php';</script>";

}else{
    echo "Conferir campos";
}

?>