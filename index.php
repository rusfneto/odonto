<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" />
	 <?php include_once("conexao.php"); ?>
	 <link href="css/signin.css" rel="stylesheet">
    <title>Plano de Vendas OdontoSA</title>
	<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
  </head>
  <?php
	//Inicializado primeira a sessão para posteriormente recuperar valores das variáveis globais. 
    session_start();
?>
  <body>
 
<div class="text-center">


  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
      <form class="form-signin" method="POST" action="valida.php">
      <img class="mb-4" src="img/nn.png" alt="">
      <h1 class="h3 mb-3 font-weight-normal"></h1>
      <input type="text" id="login" name="login" class="form-control" placeholder="Login" required autofocus>
      <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2020 - Norton Nunes<br>Developed by Rubens F. Neto</p>
    </form>

            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>

            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>

</div>

</div>
  </body>
</html>