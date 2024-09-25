<?php
include_once('conexao.php');

if(isset($_POST['update'])){ 
    $cod_pessoa= $_POST['cod_pessoa'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $data_nasc =$_POST['dt_nasc'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numCasa = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $comple = $_POST['complemento'];
    $senha = $_POST['senha'];


    $sqlatualiza = "update pessoas set 
    nome='$nome', 
    email='$email',
    telefone='$tel',
    dt_nasc='$data_nasc',
    cep='$cep', 
    rua='$rua',
    numero='$numCasa',
    bairro='$bairro',
    complemento='$comple',
    senha='$senha' where cod_pessoa = $cod_pessoa ";
    
    $result1 = $conn -> query($sqlatualiza);
    echo"oi";
        
}
header('Location: listar.php');
?>


