<?php

if(!empty($_GET['cod_pessoa']))
{
include_once('conexao.php');
$cod_pessoa = $_GET['cod_pessoa'];

$sqlconsulta = "select * from pessoas where cod_pessoa=$cod_pessoa";

$result = $conn->query($sqlconsulta);

if($result->num_rows>0){
    $sqldelete="delete from pessoas where cod_pessoa=$cod_pessoa";    
    $resultdelete = $conn->query($sqldelete);
}
header('Location: listar.php');
}
?>