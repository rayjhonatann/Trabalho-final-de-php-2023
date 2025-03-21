<?php
ini_set('default_charset', 'UTF-8');
?>
<html>
<head>
    <title>
        Editar dados do Cliente
    </title>
</head>
<body>
    <h1><font color="green">Editar dados do Cliente</font></h1>

<?php
if (isset($l['xconfirmar'])):
    
    include ("conexao.php");

    $xconta=$l['xconta'];

    $sql = mysqli_query($conexao, "SELECT * FROM conta WHERE conta='$conta'");

    $linha = mysqli_num_rows($sql);

    if($linha == 0)
    {
        echo "<span style='color:green;'> Conta Inexistente!</span>";
        echo "<a href='Editar.php'>Voltar</a>";
        return 0;
    }
    while ($l=mysqli_fetch_arrays($sql))
    {
        $conta = $l['conta'];
        $senha = $l['senha'];
        $agencia = $l['agencia'];
        $banco = $l['banco'];
        $cliente = $l['cliente'];
        $cpf = $l['cpf'];
        $telefone = $l['telefone'];
        $endereco = $l['endereco'];
        $email = $l['email'];
        $data_abertura = $l['data_abertura'];
        $data_encerramento = $l['data_encerramento'];
        $status = $l['status'];
    }
endif;
?>

<form method="post" action="">
<table>
<tr>
    <td>Conta:</td>
    <td><input name="conta" size="10">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Senha:</td>
    <td><input name="senha" size="6">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Agência:</td>
    <td><input name="agencia" size="4">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Banco:</td>
    <td><input name="banco" size="30">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Cliente:</td>
    <td><input name="cliente" size="30">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>cpf:</td>
    <td><input name="cpf" size="14">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Telefone:</td>
    <td><input name="telefone" size="15">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Endereço:</td>
    <td><input name="endereco" size="40">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>E-mail:</td>
    <td><input name="email" size="30">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Data da Abertura:</td>
    <td><input name="data_abertura" size="10">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Data do Encerramento:</td>
    <td><input name="data_encerramento" size="10">value="<?php echo $conta;?></td>
</tr>
<tr>
    <td>Status:</td>
    <td><input name="status" size="1">value="<?php echo $conta;?></td>
</tr>
</table>
<button type="submit" name="Cadastrar" style ="background-color: blue; color: white;">Cadastrar</button>
<button type="submit" name="Editar" style ="background-color: blue; color: white;">Editar</button>
<button type="submit" name="Voltar" style ="background-color: blue; color: white;">Voltar</button>
</body>
</html>