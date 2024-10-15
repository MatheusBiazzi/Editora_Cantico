<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="../estilos/icons/biblia.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"/>
    <link rel="stylesheet" href="../estilos/style-login.css">
    <link rel="stylesheet" href="../estilos/queryLogin.css">
</head>
<body class="tLogBody">
    <main>
        <section id="login">
            <div id="imagem"></div>
            <div id="formulario">
                <h2>Login</h2>
                <form action="logar.php" method="post" autocomplete="on" autocomplete="on">
                    <div class="campo">
                        <label for="iemail">
                            <i class="material-symbols-outlined">person</i>
                        </label>
                        <input type="email" name="iemail" id="iemail" placeholder="Seu nome:" autocomplete="email" maxlength="50" required>
                    </div>
                    <div class="campo">
                        <label for="isenha">
                            <i class="material-symbols-outlined">vpn_key</i>
                        </label>
                        <input type="password" name="isenha" id="isenha" placeholder="Sua senha:" autocomplete="current-password" minlength="5" maxlength="10" required>
                    </div>
                    <input type="submit" value="Entrar">
                    <a href="cadastro.php" class="btnNCont">
                        Não possui conta? <i class="material-symbols-outlined">mail</i>
                    </a>
                </form>
            </div>
        </section>
    </main>
</body>
</html>