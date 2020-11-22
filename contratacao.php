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
			.carregando2{
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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tabela de Planos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php include("tabelas/tabela_preco.php");?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-transparent" data-toggle="modal" data-target="#exampleModal" style="position:fixed; bottom:0px; right:0px;">
  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-info-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8.93 6.588l-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588z"/>
  <circle cx="8" cy="4.5" r="1"/>
</svg>
</button>

<!-- SEÇÃO 1: ESCOLHA DO PLANO -->
<p class="h4 text-black-50">Escolha o plano do cliente</p>
<form method="POST" action="importar_dados.php">
  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
    <div class="col">
	<p class="text-black-50">UF:<b class="text-danger"> *</b></p>
      <select class="form-control form-control" name="uf" id="uf" required>
  <option value="">Selecione o Estado</option>
  <?php
					$result_cat_post = "SELECT * FROM estados ORDER BY id";
					$resultado_cat_post = mysqli_query($conn, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['id'].'">'.$row_cat_post['estado'].'</option>';
					}
				?>
				</select>
    </div>
    <div class="col">
	<span class="carregando">Aguarde, carregando...</span>
	<p class="text-black-50">CIDADE:<b class="text-danger"> *</b></p>
	<select class="form-control form-control" name="cidade" id="cidade" required>
  <option></option>
</select>
    </div>
	<div class="w-100"></div>
	<p></p>
	<div class="col">
	<p class="text-black-50">PLANOS DISPONÍVEIS:<b class="text-danger"> *</b></p>
	<select class="form-control form-control" name="plano" id="plano" required>
  <option value="">Selecione o tipo de plano</option>
  <option value="PLANO MAX WEB">PLANO MAX WEB</option>
  <option value="PLANO GOLD WEB">PLANO GOLD WEB</option>
</select>
	</div>
	<div class="w-100"></div>
	<p></p>
	<div class="col">
	<p class="text-black-50">CORRETOR: <b>Norton Nunes</b></p>
	<input class="form-control" type="text" name="cnpjnorton" value="10.809.041/0001-87" placeholder="10.809.041/0001-87" id="10809041000187" readonly>
	</div>
  </div>
  <!-- SEÇÃO 2: INFORMAÇÕES PESSOAIS -->
  <p>
  <p class="h4 text-black-50">Informações pessoais do titular/responsável financeiro</p>
  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
  <div class="col">
	<p class="text-black-50">NOME COMPLETO (SEM ABREVIAÇÕES):<b class="text-danger"> *</b></p>
	<input type="name" name="nomecompleto" class="form-control" id="nomecompleto" required>
	</div>
	<div class="w-100"></div><p></p>
	<div class="col-sm">
	<p class="text-black-50">CPF:<b class="text-danger"> *</b></p>
	<input type="name" name="cpf" class="form-control" id="cpf" required>
  </div>
  <div class="col-sm">
	<p class="text-black-50">DATA DE NASCIMENTO:<b class="text-danger"> *</b></p>
	<input type="date" name="datanasc" class="form-control" id="datanasc" required>
  </div>
  <div class="col-sm">
	<p class="text-black-50">SEXO:<b class="text-danger"> *</b></p>
	<select class="form-control form-control" name="sexo" id="sexo" required>
  <option value="">SEXO</option>
  <option value="Feminino">Feminino</option>
  <option value="Masculino">Masculino</option>
</select>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
	<p class="text-black-50">RG:<b class="text-danger"> *</b></p>
	<input type="name" class="form-control" name="rg" id="rg" required>
  </div>
  <div class="col-sm">
	<p class="text-black-50">ÓRGÃO EXPEDIDOR:<b class="text-danger"> *</b></p>
	<input type="name" class="form-control" name="expedidor" id="expedidor" required>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col">
	<p class="text-black-50">NOME DA MÃE COMPLETO:<b class="text-danger"> *</b></p>
	<input type="name" class="form-control" name="nomemae" id="nomemae" required>
  </div>
   <div class="w-100"></div><p></p>
  <div class="col-sm">
	<p class="text-black-50">TELEFONE:<b class="text-danger"> *</b></p>
	<input type="name" class="form-control" name="telefone1" id="telefone1" required>
  </div>
  <div class="col-sm">
	<p class="text-black-50">E-MAIL:<b class="text-danger"> *</b></p>
	<input type="name" class="form-control" name="email" id="mail" required>
  </div>
  
  </div><p>
  <!-- SEÇÃO 3: INFORMAÇÕES DE COBRANÇA -->
  <p class="h4 text-black-50">Informações de cobrança</p>
  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
  <div class="col-sm">
  <p class="text-black-50">CEP:<b class="text-danger"> *</b></p>
  <input type="text" class="form-control-md" name="cep" id="cep" required>  
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <p class="text-black-50">ENDEREÇO:</p>
  <input type="name" class="form-control" name="logradouro" id="logradouro" readonly>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <p class="text-black-50">COMPLEMENTO:</p>
  <input type="text" class="form-control" name="complemento" id="complemento">
  </div>
  <div class="col-sm">
  <p class="text-black-50">NÚMERO:<b class="text-danger"> *</b></p>
  <input type="text" class="form-control" name="numerocasa" id="numerocasa" required>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <p class="text-black-50">PONTO DE REFERÊNCIA:<b class="text-danger"> *</b></p>
  <input type="text" class="form-control" name="referenciacasa" id="referenciacasa" required>
  </div>
  <div class="col-sm">
  <p class="text-black-50">BAIRRO:</p>
  <input type="text" class="form-control" name="bairro" id="bairro" readonly>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <p class="text-black-50">UF:</p>
  <input type="text" class="form-control" name="ufd" id="ufd" readonly>
  </div>
  <div class="col-sm">
  <p class="text-black-50">CIDADE:</p>
  <input type="text" class="form-control" name="cidaded" id="cidaded" readonly>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <p class="text-black-50">CELULAR:</p>
  <input type="text" class="form-control" name="telefone2" id="telefone2">
  </div>
  </div><p>
  <!-- SEÇÃO 4: BENEFICIÁRIOS -->
  <p class="h4 text-black-50">Beneficiários (além do titular)</p>
  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
  
  <div class="col-sm">
  <input type="checkbox" id="checkbox1" class="text-black-50" onclick="checkbenf1()"> Selecione caso tenha beneficiário</p>
  <input type="text" class="form-control" name="nomebeneficiario1" id="nomebeneficiario1" placeholder="NOME COMPLETO DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <input type="text" class="form-control" name="cpfbeneficiario1" id="cpfbeneficiario1" value="" placeholder="CPF DO BENEFICIÁRIO" readonly="readonly">
  </div>
  <div class="col-sm">
<input type="date" class="form-control" name="nascbeneficiario1" id="nascbeneficiario1" value="" placeholder="DATA DE NASCIMENTO DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
<select class="form-control form-control" name="sexobeneficiario1" id="sexobeneficiario1"  readonly="readonly">
  <option value="">SEXO</option>
  <option value="Feminino">Feminino</option>
  <option value="Masculino">Masculino</option>
</select>
  </div>
  <div class="col-sm">
<select class="form-control form-control" name="parentescobeneficiario1" id="parentescobeneficiario1"  readonly="readonly">
<option value="">PARENTESCO</option>
  <option value="Agregado/Outros">Agregado/Outros</option>
<option value="Conjugue/Companheiro">Conjugue/Companheiro</option>
<option value="Enteado">Enteado</option>
<option value="Filho">Filho</option>
<option value="Filho com restrição 24 anos">Filho com restrição 24 anos</option>
<option value="Pai/Mãe">Pai/Mãe</option>
</select>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
<input type="text" class="form-control" name="nomemaebenf1" id="nomemaebenf1" value="" placeholder="NOME DA MÃE DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <input type="checkbox" id="checkbox2" class="text-black-50" onclick="checkbenf2()"> Selecione caso tenha beneficiário</p>
  <input type="text" class="form-control" name="nomebeneficiario2" id="nomebeneficiario2" value="" placeholder="NOME COMPLETO DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
  <input type="text" class="form-control" name="cpfbeneficiario2" id="cpfbeneficiario2" value="" placeholder="CPF DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="col-sm">
<input type="date" class="form-control" name="nascbeneficiario2" id="nascbeneficiario2" value="" placeholder="DATA DE NASCIMENTO DO BENEFICIÁRIO"  readonly="readonly">
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
<select class="form-control form-control" name="sexobeneficiario2" id="sexobeneficiario2"  readonly="readonly">
  <option value="">SEXO</option>
  <option value="Feminino">Feminino</option>
  <option value="Masculino">Masculino</option>
</select>
  </div>
  <div class="col-sm">
<select class="form-control form-control" name="parentescobeneficiario2" id="parentescobeneficiario2"  readonly="readonly">
<option value="">PARENTESCO</option>
  <option value="Agregado/Outros">Agregado/Outros</option>
<option value="Conjugue/Companheiro">Conjugue/Companheiro</option>
<option value="Enteado">Enteado</option>
<option value="Filho">Filho</option>
<option value="Filho com restrição 24 anos">Filho com restrição 24 anos</option>
<option value="Pai/Mãe">Pai/Mãe</option>
</select>
  </div>
  <div class="w-100"></div><p></p>
  <div class="col-sm">
<input type="text" class="form-control" name="nomemaebenf2" id="nomemaebenf2" value="" placeholder="NOME DA MÃE DO BENEFICIÁRIO"  readonly="readonly">
  </div></div><p></p>
    <!-- SEÇÃO 5: FORMA DE PAGAMENTO -->
  <p class="h4 text-black-50">Forma de Pagamento</p>
  <div class="row justify-content-md-center py-3 px-lg-5 border bg-light">
  <div class="col-sm">
  <p class="text-black-50">Selecione a forma de pagamento do cliente:<b class="text-danger"> *</b></p>
  <select class="form-control form-control" name="formapg" id="formapg" required>
  <option value="">SELECIONE A FORMA DE PAGAMENTO</option>
  <option value="Boleto">Boleto</option>
  <option value="Credito">Cartão de Crédito</option>
</select> 
  </div>
  </div>
  <div class="w-100"></div><p></p>

  <div class="col-lg"><center><input type="submit" class="btn btn-warning btn-lg" value="FINALIZAR CONTRATAÇÃO"></input></center></div>
  <div class="w-100"></div><p></p>
  </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>
		<script type="text/javascript">
		  google.load("jquery", "1.4.2");
		</script>
		<script>
		
		function checkbenf1(){
		var checkbox = document.getElementById("checkbox1");
		
		if(checkbox.checked == true){
			document.getElementById('nomebeneficiario1').readOnly = false;
			document.getElementById('cpfbeneficiario1').readOnly = false;
			document.getElementById('nascbeneficiario1').readOnly = false;
			document.getElementById('sexobeneficiario1').readOnly = false;
			document.getElementById('parentescobeneficiario1').readOnly = false;
			document.getElementById('nomemaebenf1').readOnly = false;
		}
		else{
			document.getElementById('nomebeneficiario1').readOnly = true;
			document.getElementById('cpfbeneficiario1').readOnly = true;
			document.getElementById('nascbeneficiario1').readOnly = true;
			document.getElementById('sexobeneficiario1').readOnly = true;
			document.getElementById('parentescobeneficiario1').readOnly = true;
			document.getElementById('nomemaebenf1').readOnly = true;
		}
	}
	
	function checkbenf2(){
		var checkbox = document.getElementById("checkbox2");
		
		if(checkbox.checked == true){
			document.getElementById('nomebeneficiario2').readOnly = false;
			document.getElementById('cpfbeneficiario2').readOnly = false;
			document.getElementById('nascbeneficiario2').readOnly = false;
			document.getElementById('sexobeneficiario2').readOnly = false;
			document.getElementById('parentescobeneficiario2').readOnly = false;
			document.getElementById('nomemaebenf2').readOnly = false;
		}
		else{
			document.getElementById('nomebeneficiario2').readOnly = true;
			document.getElementById('cpfbeneficiario2').readOnly = true;
			document.getElementById('nascbeneficiario2').readOnly = true;
			document.getElementById('sexobeneficiario2').readOnly = true;
			document.getElementById('parentescobeneficiario2').readOnly = true;
			document.getElementById('nomemaebenf2').readOnly = true;
		}
	};
 </script>
		<script type="text/javascript">
		$(function(){
			$('#uf').change(function(){
				if( $(this).val() ) {
					$('#cidade').hide();
					$('.carregando').show();
					$.getJSON('carregar_cidade.php?search=',{uf: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Selecione a cidade</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].nome + '">' + j[i].nome + '</option>';
						}	
						$('#cidade').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#cidade').html('<option value="">– Escolha o Estado –</option>');
				}
			});
		});
		</script>
		
		<script type="text/javascript">
		$("#cep").focusout(function(){
			//Início do Comando AJAX
			$.ajax({
				//O campo URL diz o caminho de onde virá os dados
				//É importante concatenar o valor digitado no CEP
				url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
				//Aqui você deve preencher o tipo de dados que será lido,
				//no caso, estamos lendo JSON.
				dataType: 'json',
				//SUCESS é referente a função que será executada caso
				//ele consiga ler a fonte de dados com sucesso.
				//O parâmetro dentro da função se refere ao nome da variável
				//que você vai dar para ler esse objeto.
				success: function(resposta){
					//Agora basta definir os valores que você deseja preencher
					//automaticamente nos campos acima.
					$("#logradouro").val(resposta.logradouro);
					$("#bairro").val(resposta.bairro);
					$("#ufd").val(resposta.uf);
					$("#cidaded").val(resposta.localidade);
					//Vamos incluir para que o Número seja focado automaticamente
					//melhorando a experiência do usuário
					$("#numerocasa").focus();
				}
			});
		});
	</script>
  </body>
  </div>
    <footer class="text-muted bg-warning">
      <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright Norton Nunes - Developed by Rubens F. Neto
  </div>
  <!-- Copyright -->
    </footer>
</html>