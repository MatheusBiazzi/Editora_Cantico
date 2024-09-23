<?php
include_once('conexao.php');

if (isset($_POST['update'])) { 
    $cod_pessoa = $_POST['cod_pessoa'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['telefone'];
    $data_nasc = $_POST['dt_nasc'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numCasa = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $comple = $_POST['complemento'];
    $senha = $_POST['senha'];

    // Usando prepared statements para evitar SQL Injection
    $stmt = $conn->prepare("UPDATE pessoas SET 
        nome = ?, 
        email = ?, 
        telefone = ?, 
        dt_nasc = ?, 
        cep = ?, 
        rua = ?, 
        numero = ?, 
        bairro = ?, 
        complemento = ?, 
        senha = ? 
        WHERE cod_pessoa = ?");
    
    // Bind dos parâmetros
    $stmt->bind_param("sssssssssi", $nome, $email, $tel, $data_nasc, $cep, $rua, $numCasa, $bairro, $comple, $senha, $cod_pessoa);

    // Executa a query
    if ($stmt->execute()) {
        // Redireciona após a atualização bem-sucedida
        header('Location: listar.php');
        exit();
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fecha a statement
    $stmt->close();
}

// Fecha a conexão
$conn->close();
?>
