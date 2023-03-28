<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">

    <link type="text/css" href="css/estilo.css" rel="stylesheet">
    <link type="text/css" href="font-awesome-4.6.0/css/font-awesome.min.css" rel="stylesheet"> 
    <script type="text/jscript" src="script.js"></script>
    <title>lista cadastro</title>
</head>
<body>
    
</body>
    <h1 class="titulo">Listagem de Dados - PHP</h1>
    <table width="100%" border="1" bordercolor="#EEE" cellspacing="0" cellpadding="10">
        <tr>
            <td><strong>*Nome Completo</strong></td>
            <td><strong>Celular com DDD</strong></td>
            <td><strong>*E-mail</strong></td>
            <td> width="10"><strong>ALTERAR</strong></td>
            <td> width="10"><strong>EXCLUIR</strong></td>
        </tr>
        <?php
            include("conexao-com-bd.php");
            $seleciona=mysqli_query($conexao, "select * from dados order by id desc");
            while($campo=mysqli_fetch_array($seleciona)){?>
                <tr>
                    <td><?=$campo["*Nome Completo"]?></td>
                    <td><?=$campo["Celular com DDD"]?></td>
                    <td><?=$campo["*E-mail"]?></td>
                </tr>
        <?php   }?>

    </table>
</html>