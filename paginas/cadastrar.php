<?php
if(isset($_POST['submit'])){
include_once('conexao.php');

$nome =$_POST['inome'];
$email =$_POST['iemail'];
$tel = $_POST['itel'];
$data_nasc =$_POST['inasc'];
$cep = $_POST['icep'];
$rua = $_POST['irua'];
$numCasa = $_POST['inumCasa'];
$bairro = $_POST['ibairro'];
$comple = $_POST['icomple'];
$senha = $_POST['isenha'];

$result = mysqli_query($conn,"INSERT INTO pessoas(nome,
email, telefone, dt_nasc,cep,rua,numero,bairro,complemento,senha) values('$nome','$email','$tel','$data_nasc','$cep','$rua','$numCasa','$bairro','$comple','$senha')");

}else{
    echo "Conferir campos";
}
?>