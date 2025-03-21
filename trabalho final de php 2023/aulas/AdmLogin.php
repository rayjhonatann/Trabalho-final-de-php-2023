<?php
    ini_set('default_charset', 'UTF-8');
?>
<html>
<head>
    <title>
        Login do Administrador
    </title>
</head>
<body>
    <h1><font color="green">Login de Administrador</font></h1>
<form method="post" action="">
<table>
<tr>
    <td><input name="adm" type="hidden" value="123@45"></td>
</tr>
<tr>
    <td><input name="senhaadm" size="6" type="password"></td>
</tr>
</table>
<button type="submit" name="Confirmar" style ="background-color: blue; color: white;">Confirmar</button>
<button type="submit" name="Voltar" style ="background-color: blue; color: white;">Voltar</button>
</form>
</body>
</html>

<?php
    if (isset($_POST['Confirmar'])):
        $adm=$_POST['adm'];
        $senhaadm=$_POST['senhaadm'];

        if($senhaadm != $adm)
        {
            echo "<span style='color:red;'> Você não tem permissão para o Cadastro!</span>";
            return 0;
        }
        else
        {
            header("Location:AbrirContas.php");
        }
    endif;

    if(isset($_POST['Voltar'])):
        header("Location:MenuPrincipal.php");
    endif;

?>