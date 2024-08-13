<?php
if(!empty($_GET['cod_pessoa'])){
include_once('conexao.php');
$id = $_GET['cod_pessoa'];
$sqlconsulta = "select * from pessoas where id=$id";
$result = $con->query($sqlconsulta);

print_r($result);
if($result->num_rows>0){
    while($user_data = mysqli_fetch_assoc($result)){    
    $nome =$user_data['nome'];
    $email =$user_data['email'];
    $telefone =$user_data['telefone'];
    $data_nasc =$user_data['dt_nasc'];
    $cidade =$user_data['cidade'];
    }
    print_r($nome);
}else{
    header('Location: listar.php');
}}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <div class="box">
        <form action="atualizar.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>"required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>"required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>"required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>

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