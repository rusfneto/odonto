<!doctype html>
<html lang="en">
  <head>
  <?php
  session_start();
  ?>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
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
<script type='text/javascript'>
			$(document).ready(function(){
				$("input[name='cpf']").blur(function(){
					var $nome = $("input[name='nome']");
					var $status = $("input[name='status']");
					var $datanasc = $("input[name='datanasc']");
					var $sexo = $("input[name='sexo']");
					var $rg = $("input[name='rg']");
					var $expedidor = $("input[name='expedidor']");
					var $nomemae = $("input[name='nomemae']");
					var $nomebeneficiario1 = $("input[name='nomebeneficiario1']");
					var $cpfbeneficiario1 = $("input[name='cpfbeneficiario1']");
					var $nascbeneficiario1 = $("input[name='nascbeneficiario1']");
					var $sexobeneficiario1 = $("input[name='sexobeneficiario1']");
					var $nomebeneficiario2 = $("input[name='nomebeneficiario2']");
					var $cpfbeneficiario2 = $("input[name='cpfbeneficiario2']");
					var $nascbeneficiario2 = $("input[name='nascbeneficiario2']");
					var $sexobeneficiario2 = $("input[name='sexobeneficiario2']");
					var $logradourocobranca = $("input[name='logradourocobranca']");
					var $numerocasacobranca = $("input[name='numerocasacobranca']");
					var $bairrocobranca = $("input[name='bairrocobranca']");
					var $cidadecobranca = $("input[name='cidadecobranca']");
					var $ufcobranca = $("input[name='ufcobranca']");
					var $formapg = $("input[name='formapg']");
					
					$.getJSON('carregar_dados_aprovacao.php',{ 
						cpf: $(this).val() 
					},function(json){
						$nome.val(json.nome);
						$status.val(json.status);
						$datanasc.val(json.datanasc);
						$sexo.val(json.sexo);
						$rg.val(json.rg);
						$expedidor.val(json.expedidor);
						$nomemae.val(json.nomemae);
						$nomebeneficiario1.val(json.nomebeneficiario1);
						$cpfbeneficiario1.val(json.cpfbeneficiario1);
						$nascbeneficiario1.val(json.nascbeneficiario1);
						$sexobeneficiario1.val(json.sexobeneficiario1);
						$nomebeneficiario2.val(json.nomebeneficiario2);
						$cpfbeneficiario2.val(json.cpfbeneficiario2);
						$nascbeneficiario2.val(json.nascbeneficiario2);
						$sexobeneficiario2.val(json.sexobeneficiario2);
						$logradourocobranca.val(json.logradourocobranca);
						$numerocasacobranca.val(json.numerocasacobranca);
						$bairrocobranca.val(json.bairrocobranca);
						$cidadecobranca.val(json.cidadecobranca);
						$ufcobranca.val(json.ufcobranca);
						$formapg.val(json.formapg);
					});
				});
			});
		</script>
<form method="POST" action="atualizar_status.php">
<div class="container">
<div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
  <div class="col-sm">
  <p class="text-black-50">Digite o CPF do contratante:</p>
  <input type="text" class="form-control-md" name="cpf" id="cpf">  
  </div>
  <div class="w-100"></div>
  <div class="col-sm">
  <p></p>
  <p class="text-black-50">Nome Completo:</p>
  <input type="name" class="form-control" name="nome" id="nome">
  </div>
  <div class="col-sm">
  <p></p>
  <p class="text-black-50">Status Solicitação:</p>
  <input type="name" class="form-control" name="status" id="status">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Data de Nascimento:</p>
  <input type="name" class="form-control" name="datanasc" id="datanasc">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Sexo:</p>
  <input type="name" class="form-control" name="sexo" id="sexo">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">RG:</p>
  <input type="name" class="form-control" name="rg" id="rg">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Órgão Expedidor:</p>
  <input type="name" class="form-control" name="expedidor" id="expedidor">
  </div>
      <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Nome da Mãe:</p>
  <input type="name" class="form-control" name="nomemae" id="nomemae">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Forma de Pagamento:</p>
  <input type="name" class="form-control" name="formapg" id="formapg">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Endereço:</p>
  <input type="name" class="form-control" name="logradourocobranca" id="logradourocobranca">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Número:</p>
  <input type="name" class="form-control" name="numerocasacobranca" id="numerocasacobranca">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Bairro:</p>
  <input type="name" class="form-control" name="bairrocobranca" id="bairrocobranca">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Cidade:</p>
  <input type="name" class="form-control" name="cidadecobranca" id="cidadecobranca">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Estado:</p>
  <input type="name" class="form-control" name="ufcobranca" id="ufcobranca">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50"></p>
  
  </div>
      <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Nome Beneficiário 1:</p>
  <input type="name" class="form-control" name="nomebeneficiario1" id="nomebeneficiario1">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">CPF Beneficiário 1:</p>
  <input type="name" class="form-control" name="cpfbeneficiario1" id="cpfbeneficiario1">
  </div>
  <div class="w-100"></div>
    <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Data de Nascimento 1:</p>
  <input type="name" class="form-control" name="nascbeneficiario1" id="nascbeneficiario1">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Sexo Beneficiário 1:</p>
  <input type="name" class="form-control" name="sexobeneficiario1" id="sexobeneficiario1">
  </div>
  <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Nome Beneficiário 2:</p>
  <input type="name" class="form-control" name="nomebeneficiario2" id="nomebeneficiario2">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">CPF Beneficiário 2:</p>
  <input type="name" class="form-control" name="cpfbeneficiario2" id="cpfbeneficiario2">
  </div>
  <div class="w-100"></div>
    <div class="w-100"></div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Data de Nascimento 2:</p>
  <input type="name" class="form-control" name="nascbeneficiario2" id="nascbeneficiario2">
  </div>
    <div class="col-sm">
  <p></p>
  <p class="text-black-50">Sexo Beneficiário 2:</p>
  <input type="name" class="form-control" name="sexobeneficiario2" id="sexobeneficiario2">
  </div>
  <div class="w-100"></div>
  <p></p>
  <div class="col-sm">
  <div class="col-lg"><center><input type="submit" class="btn btn-warning btn-md" value="APROVAR CONTRATAÇÃO"></input></center></div>
  </div>
</div>
</div>
</form>
   
  </body>
  
</html>