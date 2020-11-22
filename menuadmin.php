<?php
if($_SESSION['usuarioNiveisAcessoId'] == "1"){
	
				echo"<li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Contratação de planos</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
				<a class='dropdown-item' href='contratacao.php'>Realizar contratação</a>
				<a class='dropdown-item' href='#'>Dúvidas Frequentes</a>
				<a class='dropdown-item' href='tabelas.php'>Tabela de Cobertura e Preços</a>
				</div>
				</li>
				<li class='nav-item dropdown'>
				<a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Administrativo</a>
				<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>
				<a class='dropdown-item' href='aprovar.php'>Aprovar contratações</a>
				<a class='dropdown-item' href='exportar.php'>Exportar contratações</a>
				</div>
				</li>";
}
else{
	header("location:home.php");
}
?>