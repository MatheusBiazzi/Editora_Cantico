<?php
require_once("../conexao.php");

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nomeProd = $_POST['nome'];
    $valProd = $_POST['valor'];
    $descProd = $_POST['descricao'];
    $imagProd = $_FILES['imagem'];

    // Definir o diretório para salvar as imagens
    $diretorio = 'imagens/';

    // Nome único para a imagem, para evitar conflitos
    $caminho_imagem = $diretorio . basename($imagProd['name']);
    echo $caminho_imagem;
    // Mover a imagem para o diretório definido
    if (move_uploaded_file($imagProd['tmp_name'], $caminho_imagem)) {
        // Inserir o nome e o caminho da imagem no banco de dados
        $sql = "INSERT INTO produtos(nome, valor,descricao, imagem) values('$nomeProd','$valProd','$descProd','$caminho_imagem')";
        //$sql = mysqli_query($conn, "INSERT INTO produtos(nome, valor,descricao, imagem) values('$nomeProd','$valProd','$descProd','$imagProd')");

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