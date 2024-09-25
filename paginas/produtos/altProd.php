<?php
include_once('../conexao.php');

if(isset($_POST['update'])){
    $cod_produto = $_POST['cod_produto'];
    $nomeProd = $_POST['nome'];
    $valProd = $_POST['valor'];
    $descProd = $_POST['descricao'];
    $imagProd = $_POST['imagem'];


$sqlatualiza = "update produtos set nome='$nomePoduto', valor='$valProd', descricao='$descProd',imagem='$imagProd' where cod_produto='$cod_produto'";
$result = $conn->query($sqlatualiza);

}
header('Location: listProd.php');
?>