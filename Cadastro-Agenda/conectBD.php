<?php
    include("conexao-com-bd.php");

    $recnome=$_GET["*Nome Completo"];
    $reccelular=$_GET["*Celular com DDD"];
    $recemail=$_GET["*E-mail"];

    mysqli_query($conexao, "insert into dados (*Nome Completo, *Celular com DDD, *E-mail) values ('$recnome', '$reccelular', '$recemail')");

    header("location:cadastro.php");

?>