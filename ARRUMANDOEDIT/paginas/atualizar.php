<?php
include_once('conexao.php');

if(isset($_POST['update'])){
$id = $_POST['id'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$telefone =$_POST['telefone'];
$data_nasc =$_POST['data_nascimento'];
$cidade =$_POST['cidade'];


$sqlatualiza = "update pessoas set nome='$nome', email='$email', telefone='$telefone', dt_nasc='$data_nasc', cidade='$cidade' where cod_pessoa='$id'";
$result = $con->query($sqlatualiza);

}
header('Location: listar.php');
?>

<?php
include_once('conexao.php');

if(isset($_POST['update']))
{
$id = $_POST['id'];
$nome =$_POST['nome'];
$email =$_POST['email'];
$telefone =$_POST['telefone'];
$data_nasc =$_POST['data_nascimento'];
$cidade =$_POST['cidade'];


$sqlatualiza = "update cliente set nome='$nome', email='$email', telefone='$telefone', datan='$data_nasc', cidade='$cidade' where id='$id'";
$result = $con->query($sqlatualiza);

}
header('Location: listar.php');
?>