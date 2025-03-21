<?php
    ini_set('default_charset', 'UTF-8');
?>
<html>
<head>
    <title>
        ABERTURA DE CONTAS
    </title>
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

h1 {
    text-align: center;
    font-size: 30px;
    color: #333;
}

form {
    display: inline-block;
    width: 600px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.1);
}

table {
    width: 100%;
    border-collapse: collapse;
}

table tr td {
    padding: 10px;
    border: 1px solid #ddd;
}

table tr td:first-child {
    width: 200px;
    font-weight: bold;
}

input[type="text"], input[type="password"], input[type="date"], input[type="email"] {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
    outline: none;
}

button {
    padding: 10px 20px;
    background-color: blue;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    margin: 10px 0;
}

button:hover {
    background-color: darkblue;
}
    </style>
</head>
<body>
    <h1>Abertura de Contas</h1>
<form method="post" action="">
<table>
<tr>
    <td>Conta:</td>
    <td><input name="conta" size="10" autocomplete="off"></td>
</tr>
<tr>
    <td>Senha:</td>
    <td><input name="senha" size="6" autocomplete="off"></td>
</tr>
<tr>
    <td>Agência:</td>
    <td><input name="agencia" size="4" autocomplete="off"></td>
</tr>
<tr>
    <td>Banco:</td>
    <td><input name="banco" size="30" autocomplete="off"></td>
</tr>
<tr>
    <td>Cliente:</td>
    <td><input name="cliente" size="30" autocomplete="off"></td>
</tr>
<tr>
    <td>cpf:</td>
    <td><input name="cpf" size="14" autocomplete="off"></td>
</tr>
<tr>
    <td>Telefone:</td>
    <td><input name="telefone" size="15" autocomplete="off"></td>
</tr>
<tr>
    <td>Endereço:</td>
    <td><input name="endereco" size="40" autocomplete="off"></td>
</tr>
<tr>
    <td>E-mail:</td>
    <td><input name="email" size="30" autocomplete="off"></td>
</tr>
<tr>
    <td>Data da Abertura:</td>
    <td><input name="data_abertura" size="10" autocomplete="off"></td>
</tr>
<tr>
    <td>Data do Encerramento:</td>
    <td><input name="data_encerramento" size="10" autocomplete="off"></td>
</tr>
<tr>
    <td>Status:</td>
    <td><input name="status" size="1" autocomplete="off"></td>
</tr>
</table>
<button type="submit" name="Cadastrar" >Cadastrar</button>
<button type="submit" name="Editar" >Editar</button>
<button type="submit" name="Voltar" >Voltar</button>
</form>
</body>
</html>

<?php
    if(isset($_POST['Cadastrar'])):
        include ("conexao.php");

        $conta = $_POST['conta'];
        $senha = $_POST['senha'];
        $agencia = $_POST['agencia'];
        $banco = $_POST['banco'];
        $cliente = $_POST['cliente'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $endereco = $_POST['endereco'];
        $email = $_POST['email'];
        $data_abertura = $_POST['data_abertura'];
        $data_encerramento = $_POST['data_encerramento'];
        $status = $_POST['status'];

        $sql=mysqli_query($conexao, "INSERT INTO tbcontas (conta,senha,agencia,banco,cliente,cpf,telefone,
        endereco,email,data_abertura,data_encerramento,status) VALUES('$conta', '$senha', '$agencia', '$banco',
        '$cliente', ' $cpf', '$telefone', '$endereco', '$email',
        '$data_abertura','$data_encerramento', '$status')");

        if($sql == true)
        {
            echo "<span style='color:green;'>Cadastro efetuado com sucesso!</span>";
        }
        else
        {
            echo "<span style='color:green;'> ERROR: Cadastro cancelado!</span>";
        }
        echo "<a href=MenuPrincipal.php<span style='background-color:green; color:white;'> Voltar </a></span>";
    endif;

    if(isset($_POST['Editar'])):
        header("Location:Editor.php");
    endif;

    if(isset($_POST['Voltar'])):
        header("Location:MenuPrincipal.php");
    endif;

?>