<!doctype html>
<html lang="en">
  <head>
  <?php
  session_start();
  ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	
  </head>
  <body>
      <header>
  
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a href="home.php" class="navbar-brand">
        <img src="img/nn.png"/>
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

<?php include("tabelas/tabela_preco.php");?>


</div>
  </body>
  <footer class="text-muted bg-warning">
      <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright Norton Nunes - Developed by Rubens F. Neto
  </div>
  <!-- Copyright -->
    </footer>
</html>