<?php  
 $connect = mysqli_connect("localhost", "root", "Recuperacao08", "odontosa");  
 
 $query ="SELECT * FROM planos";  
 $result = mysqli_query($connect, $query);  
 ?>
<table id="employee_data" class="table table-striped table-dark">  
                           <thead>
                               <tr>  
                                    <th scope="col"><center>Estado</center></th>  
                                    <th scope="col"><center>Max Boleto</center></th> 
                                    <th scope="col"><center>Max Crédito</center></th>   
									<th scope="col"><center>Gold Boleto</center></th> 
                                    <th scope="col"><center>Gold Crédito</center></th> 
                               </tr>  
                          </thead>
<tbody>						  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <th><center>'.$row["estado"].'</center></th>  
                                    <td><center>R$'.$row["max_boleto"].'</center></td>  
                                    <td><center>R$'.$row["max_credito"].'</center></td>
									<td><center>R$'.$row["gold_boleto"].'</center></td>  									
                                    <td><center>R$'.$row["gold_credito"].'</center></td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
						  </tbody>
                     </table> 
	<div class="row">
 
  <div class="col">
<center>  
	<div class="card text-white bg-secondary mb-3" style="max-width: 18rem; max-height:22rem;">
  <div class="card-header">Coberturas</div>
  <div class="card-body">
    <h5 class="card-title">Plano Max</h5>
    <p class="card-text">Consultas<br>Diagnóstico<br>Radiologia<br>Prevenção em saúde bucal<br>Dentística<br>Odontopediatria<br>Endodontia<br>
Períodontia<br>Cirurgia oral menor<br>Prótese</p>
  </div>
	
  </div>
</center>	
</div>
  
  <div class="col">
<center>  
	<div class="card text-white bg-warning mb-3" style="max-width: 18rem; height:22rem;">
  <div class="card-header">Coberturas</div>
  <div class="card-body">
    <h5 class="card-title">Plano Gold</h5>
    <p class="card-text">Além de toda cobertura do PLANO MAX + coberturas adicionais em:<br>
Radiologia<br>
Dentística<br>
Odontopediatria<br>
Períodontia<br>
Ortodontia</p>
  </div>
	
  </div>
</center>	
</div>


  </div>
