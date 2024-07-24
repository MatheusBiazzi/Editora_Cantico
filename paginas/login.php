<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../estilos/style.css">
<style>
    .tLogBody{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f5f5;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-image: url('background.jpg');
    background-size: cover;
    background-position: center;
}
.tLogSec{
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.479);
    width: 300px;
    text-align: center;
    padding-right: 45px;
}
.tLogForms{
    display: flex;
    flex-direction: column;
}
.tLoglab{
    font-weight: bold;
    margin-bottom: 8px;
    display: block;
    text-align: left;
}
.tLogEmail, .tLogSenha {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 14px;
    width: 100%;
}
.tLogBtn{
  
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    
}
.tLogBtn:hover {
    background-color: #0056b3;
}
.backBtn {
            position: absolute;
            color: black;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 20px;
        }

</style>
</head>
<body class="tLogBody">
    <section class="tLogSec">
        <button class="backBtn" onclick="window.history.back();">&larr;</button>
        <h2 style="text-align: center; margin-bottom: 20px;">Faça login</h2>
        <form action="logar.php" method="post" class="tLogForms">
            <p>
                <label for="iemail" class="tLoglab">E-mail:</label>
                <input type="email" name="iemail" id="iemail" class="tLogEmail" required>
            </p>
            <p>
                <label for="isenha" class="tLoglab">Senha:</label>
                <input type="text" name="isenha" id="isenha" class="tLogSenha" required>
            </p>
            <input type="submit" value="Entrar" class="tLogBtn">
        </form>
    </section>
</body>
</html>