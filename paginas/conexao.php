<?php
    $host = "localhost";
    $bd = "tccBiazzi";
    $usuario = "aluno";
    $senha = "ceep";
     /*ou 
    $host = "localhost";
    $bd = "tccbiazzi";
    $usuario = "root";
    $senha = "";*/
    
    
    $conn = mysqli_connect($host, $usuario, $senha, $bd);
?>