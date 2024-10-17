<?php
require_once("../paginas/conexao.php");

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$sql = "SELECT * FROM tb_imagem";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "<h3>" . $row['nome'] . "</h3>";
        echo "<img src='" . $row['caminho'] . "' width='300' alt='" . $row['nome'] . "'><br><br>";
    }
} else {
    echo "Nenhuma imagem encontrada.";
}

// Fechar conexão
//$conexao->close();
?>