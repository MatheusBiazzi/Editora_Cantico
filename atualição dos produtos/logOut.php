<?php
    session_start();
    unset($_SESSION["iemail"]);
    unset($_SESSION["isenha"]);
    session_destroy();
    header("location:home.html");
    exit();
?>