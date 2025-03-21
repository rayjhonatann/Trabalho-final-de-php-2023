<?php
    ini_set('default_charset', 'UTF-8');
?>
<html>
<head>
    <title>
        SISTBANK
    </title>
    <style>body {
    background-color: #f4f4f4;
    font-family: Arial, sans-serif;
}

h1 {
    text-align: center;
    color: green;
}

form {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

button {
    background-color: #007BFF;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}</style>
</head>
<body>
    <h1><font color="green">Sistema de Controle Bancário</font></h1>
<form method="post" action="">
    <br><br>
    <button type="submit" name="Lancamentos" style ="background-color: blue; color: white;"> Lançamentos </button>
    <button type="submit" name="Extratos" style ="background-color: blue; color: white;"> Extratos </button>
    <button type="submit" name="Saldos" style ="background-color: blue; color: white;"> Saldos </button>
    <button type="submit" name="AbrirContas" style ="background-color: blue; color: white;"> Abrir Contas </button>
</form>
</body>
</html>
<?php
    if (isset($_POST['Lancamentos'])):
        header("Location:Lancamentos.php");
    endif;

    if (isset($_POST['Extratos'])):
        header("Location:Extratos.php");
    endif;

    if (isset($_POST['Saldos'])):
        header("Location:Saldos.php");
    endif;

    if (isset($_POST['AbrirContas'])):
        header("Location:AdmLogin.php");
    endif;
?>