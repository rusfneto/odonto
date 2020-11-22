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

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	
	 <?php include_once("conexao.php"); ?>
    <title>Plano de Vendas OdontoSA</title>
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
	<script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<?php  
 $connect = mysqli_connect("localhost", "root", "Recuperacao08", "odontosa");  
 
 $query ="SELECT * FROM cadastros";  
 $result = mysqli_query($connect, $query);  
 ?>
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
	</div>
  </nav>
</header>
<br>
<div class="container">
<form method="POST" action="exporta_contratos.php">
<div class="row justify-content py-3 px-lg-5 border bg-light">
<div class="row">
<div class="col-3">
	<label>Data inicial</label>
	<input type="date" name="dataexp" class="form-control" id="dataexp">
  </div>
  <div class="col-3">
  <label>Data final</label>
	<input type="date" name="dataexp2" class="form-control" id="dataexp2">
  </div>
 
  <div class="col-2" style="margin-top:1%;">
  <br>
	<input type="submit" class="btn btn-warning btn-sm" value="Exportar Relatório.CSV"></input>
	
  </div>
  <div class="col-6">
  <p class="text-warning">O relatório será gerado somente com os contratos já aprovados.</p>
  </div>
</div>
<div class="w-100"></div><p></p>
<div class="row">
  <table id="employee_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Nome do Contratante</td>  
                                    <td>Plano Contratado</td>  
                                    <td>Valor do Plano</td>  
									<td>Forma de Pagamento</td>
                                    <td>Data da Contratação</td> 
									<td>Situação da Solicitação</td> 
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["nome"].'</td>  
                                    <td>'.$row["plano"].'</td>  
                                    <td>'.$row["valor"].'</td>
									<td>'.$row["formapg"].'</td>  									
                                    <td>'.$row["data_contratacao"].'</td> 
									<td>'.$row["status"].'</td>  									
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table> 
</div>
</div>
</div>
</form>
		<script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable( {
            "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nenhum Registro Encontrado",
                "info": "Mostrando Página _PAGE_ de _PAGES_",
				"search": "Buscar",
                "infoEmpty": "Nenhum registro Disponível",
                "infoFiltered": "(filtrado de _MAX_ registro no total)",
				"oPaginate": {sFirst:"Primeira Página",sLast:"Última Página",sNext:"Próxima Página",sPrevious:"Página Anterior"}
            }
        } ); 
 });  
 </script>  
  </body>

</html>