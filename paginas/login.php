<?php
    session_start();
    if(empty($_SESSION)){
        echo"<script>location.href='index.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print"seja bem vindo ".$_SESSION["nome"];
        print"<a href='logout.php'> sair</a>";
    ?>
</body>
</html>