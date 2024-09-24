<?php
if(!empty($_GET['cod_produto'])){
    include_once('../conexao.php');
    $cod_produto = $_GET['cod_produto'];

    $sqlconsulta = "select * from produtos where cod_produto=$cod_produto";

    $result = $conn->query($sqlconsulta);

if($result->num_rows>0){
    $sqldelete="delete from produtos where cod_produto=$cod_produto";    
    $resultdelete = $conn->query($sqldelete);
}
    header('Location: listProd.php');
}
?>