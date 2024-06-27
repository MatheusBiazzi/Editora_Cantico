<?php       
if(isset($_POST['submit'])){
include_once('conexao.php');

$nome =$_POST['nome'];
$email =$_POST['email'];
$tel =$_POST['telefone'];
$data_nasc =$_POST['dt_nasc'];
$cep = $_POST['cep'];
$rua = $_POST['rua'];
$numCasa = $_POST['numero'];
$bairro = $_POST['bairro'];
$comple = $_POST['complemento'];
$senha = $_POST['senha'];

$result = mysqli_query($conn,"INSERT INTO pessoas(nome,
email, telefone, dt_nasc,cep,rua,numero,bairro,complemento,senha) values('$nome','$email','$tel','$data_nasc','$rua','$numCasa','$bairro','$comple','$cep','$senha')");

echo('cadastrado com sucesso: ');
}else{
    echo "tente de novo";
}
?>

