<!doctype html>
<html lang="en">
  <head>
  <?php
  session_start();
  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css" />
	 <?php include_once("conexao.php"); ?>
    <title>Plano de Vendas OdontoSA</title>
	<style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
  </head>
  <body>
      <header>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a href="#" class="navbar-brand">
        <img src="img/nnlogo.png"/>
      </a>
	  <?php
    echo "Olá, ". $_SESSION['usuarioNome'] ."!";

?>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
<?php
if($_SESSION['usuarioNiveisAcessoId'] == "0"){
                include ("menucolaborador.php");
            }elseif($_SESSION['usuarioNiveisAcessoId'] == "1"){
                include ("menuadmin.php");
            }
?>
<li class="nav-item">
        <a class="nav-link text-light-50" href="sair.php">Deslogar</a>
      </li>
</ul>
    </div>
  </nav>
</header>
<br>
<div class="container">
<div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
<h2 class="text-warning">Bem vindo ao painel de contratações Odonto S.A.</h2>
<center><h5 class="text-black-50">Selecione a opção desejada no menu localizado na parte superior.</h5></center>

</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	
		
  </body>
</html>