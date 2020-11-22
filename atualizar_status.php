<?php include_once("conexao.php");
 session_start();
$cpf = $_POST['cpf'];

$carregar_atualizacao = "UPDATE cadastros SET status='Aprovado' WHERE cpf='$cpf'";
$atualizar = mysqli_query($conn, $carregar_atualizacao);

?>
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
    <title>Plano de Vendas OdontoSA</title>
  </head>
  <body>
      <header>
  <script>
  $('.alert').alert()
  $(document).ready(function () {
    $("#flash-msg").delay(3000).fadeOut("slow");
});
  </script>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container">
      <a href="#" class="navbar-brand">
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

<?php
echo "<div class='alert alert-success alert-dismissable' id='flash-msg'>
<button aria-hidden='true' data-dismiss='alert' class='close' type='button'>×</button>
<h4><i class='icon fa fa-check'></i>Atualizado! Aguarde enquanto redirecionamos para a página de aprovação.</h4>
</div>";
header("refresh: 2; url=aprovar.php");
?>

</div>


</body>