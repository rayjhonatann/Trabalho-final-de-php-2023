<?php
ini_set('default_charset', 'UTF-8');
?>
<html>
<head>
    <title>
        Depóstos
    </title>
</head>
<body>
    <h1><font color="green">Depositar</font></h1>

    <?php
        if (isset($_POST['xconfirmar'])):
            include("conexao.php");

            $xconta = $_POST['xconta'];

            $sql = mysqli_query($conexao, "SELECT * FROM tbcontas WHERE conta='$xconta'");

            $linha = mysqli_num_rows($sql);

            if($linha == 0)
            {
                echo "<span style='color:green;'> Conta Inexistente!</span>";
                echo "<a href='Depositar.php'>Voltar</a>";
                return 0;
            }
            while ($l=mysqli_fetch_array($sql))
            {
                $conta = $l['conta'];
                $senha = $l['senha'];
                $agencia = $l['agencia'];
                $banco = $l['banco'];
                $cliente = $l['cliente'];
                
            }
        endif;
?>
<form method="post" action="">
<table>
<tr>
    <td>Conta:</td>
    <td><input name="conta" size="10" value="<?php echo $conta;?>"></td>
</tr>
<tr>
    <td>Senha:</td>
    <td><input name="senha" size="6" value="<?php echo $senha;?>"></td>
</tr>
<tr>
    <td>Agência:</td>
    <td><input name="agencia" size="4" value="<?php echo $agencia;?>"></td>
</tr>
<tr>
    <td>Banco:</td>
    <td><input name="banco" size="30" value="<?php echo $banco;?>"></td>
</tr>
<tr>
    <td>Cliente:</td>
    <td><input name="cliente" size="30" value="<?php echo $cliente;?>"></td>
</tr>
<tr>
    <td>Valor do Depósito:</td>
    <td><input name="valor" type="number" size="10" autocomplete="off"></td>
</tr>
<tr>
    <td>Data do Depósito:</td>
    <td><input name="data_atual" size="10" value="<?php echo date('d/m/y');?>"></td>
</tr>
</table>
<br><br>

<button type="submit" name="Validar" style ="background-color: blue; color: white;">Validar</button>
<button type="submit" name="Cancelar" style ="background-color: blue; color: white;">Cancelar</button>
</form>
</body>
</html>
<?php
if (isset($_POST['Validar'])):
        include("conexao.php");

        $conta = $_POST['conta'];
        $valor = $_POST['valor'];
        $data_deposito = $_POST['data_atual'];

        $xdata = DateTime::createFromFormat('d/m/Y', "$data_deposito")->format('Y/m/d');

        $tipo = "C";

        $sql = mysqli_query($conexao, "INSERT INTO tblancamentos(conta,data_lanc,valor,tipo)VALUES('$conta', '$xdata', '$valor', '$tipo')");

        header("Location:Depositos.php");
    endif;

    if(isset($_POST['Cancelar'])):
        header("Location:Lancamentos.php");
    endif;
?>