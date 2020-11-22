<?php include_once("conexao.php");
 session_start();
$colaborador = $_SESSION['usuarioNome'];
//seção 1
$ufplano = $_POST['uf'];
$cidadeplano = $_POST['cidade'];
$plano = $_POST['plano'];
//seção 2
$nometitular = $_POST['nomecompleto'];
$cpf = $_POST['cpf'];
$datanasc = date('d/m/Y',strtotime($_POST['datanasc']));
$sexo = $_POST['sexo'];
$rg = $_POST['rg'];
$expedidor = $_POST['expedidor'];
$nomemae = $_POST['nomemae'];
$telefone1 = $_POST['telefone1'];
$email= $_POST['email'];
//seção 3
$cepcobranca = $_POST['cep'];
$logradourocobranca = $_POST['logradouro'];
$complementocobranca = $_POST['complemento'];
$numerocasacobranca = $_POST['numerocasa'];
$referenciacobranca = $_POST['referenciacasa'];
$bairrocobranca = $_POST['bairro'];
$ufcobranca = $_POST['ufd'];
$cidadecobranca = $_POST['cidaded'];
$celcobranca = $_POST['telefone2'];
//seção 4: beneficiário1
$nomebeneficiario1 = $_POST['nomebeneficiario1'];
$cpfbeneficiario1 = $_POST['cpfbeneficiario1'];
$nascbeneficiario1 = $_POST['nascbeneficiario1'];
$sexobeneficiario1 = $_POST['sexobeneficiario1'];
$parentescobeneficiario1 = $_POST['parentescobeneficiario1'];
$nomemaebenf1 = $_POST['nomemaebenf1'];
//seção 4: beneficiário2
$nomebeneficiario2 = $_POST['nomebeneficiario2'];
$cpfbeneficiario2 = $_POST['cpfbeneficiario2'];
$nascbeneficiario2 = $_POST['nascbeneficiario2'];
$sexobeneficiario2 = $_POST['sexobeneficiario2'];
$parentescobeneficiario2 = $_POST['parentescobeneficiario2'];
$nomemaebenf2 = $_POST['nomemaebenf2'];
//seção 5
$formapg = $_POST['formapg'];

if(empty($cpf)){
	$convertercpf0 = 0;
}
else
{
	$convertercpf0 = 1;
}

if(empty($cpfbeneficiario1)){
	$convertercpf1 = 0;
}
else
{
	$convertercpf1 = 1;
}
if(empty($cpfbeneficiario2)){
	$convertercpf2 = 0;
}
else
{
	$convertercpf2 = 1;
}



$buscarufplano = $conn->query("SELECT * FROM estados WHERE id='$ufplano'");
$objj = $buscarufplano->fetch_object();
$planouf = $objj->estado;

if($formapg == "Boleto" AND $plano == "PLANO MAX WEB"){
	$pg_forma="max_boleto";
	}
else if($formapg == "Boleto" AND $plano == "PLANO GOLD WEB"){
	$pg_forma="gold_boleto";
	}
else if($formapg == "Credito" AND $plano == "PLANO MAX WEB"){
	$pg_forma="max_credito";
	}
else if($formapg == "Credito" AND $plano == "PLANO GOLD WEB"){
	$pg_forma="gold_credito";
	}


$buscarpreco = $conn->query("SELECT * FROM planos WHERE estado='$planouf'");
$obj = $buscarpreco->fetch_object();
$achouvalor = $obj->$pg_forma;

//aqui identifica o valor e converte (,90)
  $primeiro_valor = substr($achouvalor, 0, 2);
  $segundo_valor = substr($achouvalor, 2, 2); 
  
   $final1 = str_replace (',', '.', str_replace ('.', '', $primeiro_valor));
   $final2 = str_replace (',', '.', str_replace ('.', '', $segundo_valor));
   
   $somarvalor = $final1+$final2;

$soma = $convertercpf0 + $convertercpf1 + $convertercpf2;
$valorfinalplano = $soma * $somarvalor;

$data = date("d/m/Y");

$carregar_importacao = "INSERT INTO cadastros (nome, cpf, datanasc, sexo, rg, expedidor, nomemae, telefone1, email, cepcobranca, logradourocobranca, complementocobranca, numerocasacobranca, referenciacobranca, bairrocobranca, ufcobranca, cidadecobranca, celcobranca, nomebeneficiario1, cpfbeneficiario1, nascbeneficiario1, sexobeneficiario1, parentescobeneficiario1, nomemaebenf1, nomebeneficiario2, cpfbeneficiario2, nascbeneficiario2, sexobeneficiario2, parentescobeneficiario2, nomemaebenf2, formapg, ufplano, cidadeplano, plano, valor, corretor, colaborador, data_contratacao, status) 
VALUES ('$nometitular', '$cpf', '$datanasc', '$sexo', '$rg', '$expedidor', '$nomemae', '$telefone1', '$email', '$cepcobranca', '$logradourocobranca', '$complementocobranca', '$numerocasacobranca', '$referenciacobranca', '$bairrocobranca', '$ufcobranca', '$cidadecobranca', '$celcobranca', '$nomebeneficiario1', '$cpfbeneficiario1', '$nascbeneficiario1', '$sexobeneficiario1', '$parentescobeneficiario1', '$nomemaebenf1', '$nomebeneficiario2', '$cpfbeneficiario2', '$nascbeneficiario2', '$sexobeneficiario2', '$parentescobeneficiario2', '$nomemaebenf2', '$formapg', '$planouf', '$cidadeplano', '$plano', '$valorfinalplano', '10809041000187', '$colaborador', '$data', 'Pendente')";
$importar = mysqli_query($conn, $carregar_importacao);

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
<div class="container">
<div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
<h2 class="text-warning">Contratação Realizada com Sucesso!</h2>
<center><h5 class="text-black-50">Agora o contratante deve encaminhar todas as documentações abaixo para "planoodonto@nortonnunes.com.br", para que possamos prosseguir com as tratativas de seu contrato:<br>- RG (frente e verso) do titular e beneficiários (se houver)<br>- CPF (frente e verso) do titular e beneficiários (se houver)<br>- Comprovante de residência (Água, luz, telefone ou comprovante de cartão de crédito).</h5></center>
<center><h5 class="text-danger">IMPORTANTE: Caso o cliente solicite o pagamento via cartão de crédito as informações do cartão serão solicitadas diretamente pela operadora.</h5></center><br>
<h5 class="text-warning">Informações adicionais:</h5>
<div class="w-100"></div>
<p>Nome do titular: </p> <?=$nometitular?>
<div class="w-100"></div>
<p>Plano contratado: </p> <?=$plano?>
<div class="w-100"></div>
<p>Quantidade de beneficiários: </p> <?=$soma?>
<div class="w-100"></div>
<p>Valor mensal do plano: R$</p> <?=$valorfinalplano?>
<div class="w-100"></div>
<p>Forma de pagamento: </p> <?=$formapg?>
</div>
</div>
</body>