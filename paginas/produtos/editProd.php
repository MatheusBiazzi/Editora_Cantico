<?php
if(!empty($_GET['cod_produto'])){
    include_once('../conexao.php');
    $cod_produto = $_GET['cod_produto'];
    $sqlconsulta = "select * from produtos where cod_produto=$cod_produto";
    $result = $conn->query($sqlconsulta);
    
    if($result->num_rows>0){
        while($user_data = mysqli_fetch_assoc($result)){    
            $cod_produto = $user_data['cod_produto'];
            $nomeProd = $user_data['nome'];
            $valProd = $user_data['valor'];
            $descProd = $user_data['descricao'];
            $imagProd = $user_data['imagem'];
        }
    }else{
        header('Location: ../paginas/listar.php');
    }}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editando produtos</title>
</head>
<body>
    <main>
        <div>
            <form action="altProd.php" method="post">
                <fieldset>
                    <legend>Dados do produtos</legend>
                    <p>
                        <label for="nome">Nome do produto:</label>
                        <input type="text" name="nome" id="nome" value="<?php echo $nomeProd ?>" required>
                    </p>
                    <p>
                        <label for="valor">Valor do produto:</label>
                        <input type="number" name="valor" id="valor" value="<?php echo $valProd ?>" required>
                    </p>
                    <p>
                        <label for="descricao">Descrição:</label>
                        <input type="text" name="descricao" id="descricao" value="<?php echo $descProd ?>">
                    </p>
                    <p>
                        <label for="imagem">Adicionar imagem:</label>
                        <input type="file" name="imagem" id="imagem" value="<?php echo $imagProd ?>" required>
                    </p>
                    <p>
                        <input type="submit" value="Alterar" name="update">
                    </p>

                </fieldset>
            </form>
        </div>
    </main>
</body>
</html>