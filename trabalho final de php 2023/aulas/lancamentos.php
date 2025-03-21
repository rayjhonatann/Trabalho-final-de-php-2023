<?php
ini_set('default_charset','UTF-8');
?>

<html>
  <head>
      <title>Lancamento</title>
  </head>
<body>
      <h1><font color="green">Depositos e saques</font></h1>
      
      <form method="post" action="">
        <br><br>
        <button type="submit" name="Depositar" style="background-color:blue; color: white">Depositar</button>    
        <button type="submit" name="Sacar" style="background-color:blue; color: white">Sacar</button>      
        <button type="submit" name="Voltar" style="background-color:blue; color: white">Voltar</button>      
      </form>
</body>
</html>

<?php 
      if (isset($_POST['Depositar'])):
          header("Location: Depositos.php");
      endif;
      
      if (isset($_POST['Sacar'])):
          header("Location: saques.php");
      endif;
      
      if (isset($_POST['Voltar'])):
          header("Location: MenuPrincipal.php");
      endif;
?>
