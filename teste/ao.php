<?php
require_once("../paginas/conexao.php");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $imagem = $_FILES['imagem'];

    // Definir o diretório para salvar as imagens
    $diretorio = 'imagens/';

    // Nome único para a imagem, para evitar conflitos
    $caminho_imagem = $diretorio . basename($imagem['name']);

    // Mover a imagem para o diretório definido
    if (move_uploaded_file($imagem['tmp_name'], $caminho_imagem)) {
        // Inserir o nome e o caminho da imagem no banco de dados
        $sql = "INSERT INTO tb_imagem (nome, caminho) VALUES ('$nome', '$caminho_imagem')";

    
        if ($conn->query($sql) === TRUE) {
            echo "Imagem enviada com sucesso!";
        } else {
            echo "Erro ao salvar no banco de dados: " . $conn->error;
        }
    } else {
        echo "Erro ao fazer o upload da imagem.";
    }
}

// Fechar conexão
//$conexao->close();
?>