<?php
    ini_set('default_charset','UTF-8');
?>

<html>
    <head>
        <title> Depósitos </title>
    </head>
    <body>

        <h1><font color ="green">Depositar</font></h1>

    <form method="post" action="Depositar.php">
     <table>
        <tr>
            <td>Digite a conta:</td>
            <td><input name="xconta" size="10" type ="text" autocomplete="off"></td>
        </tr>
    
    </table>
    <br>
    <button type= "submit" name="xconfirmar" style="background-color:green; color: white"> Confirmar </button>
    <button type= "submit" formaction="Lancamentos.php" name="xvoltar" style="background-color:green; color: white"> Voltar </button>
    </form> 
</body>
</html>
