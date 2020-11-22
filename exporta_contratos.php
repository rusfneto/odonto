<?php
	session_start();
	include_once('conexao.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Contato</title>
	<head>
	
	<body>
		<?php
		$localizado = date('d/m/Y',strtotime($_POST["dataexp"]));
		$localizado2 = date('d/m/Y',strtotime($_POST["dataexp2"]));
		//Função dia hoje
		$hoje = date('d/m/Y');
		// Definimos o nome do arquivo que será exportado
		$arquivo = 'relContratosAprovados_'.$hoje.'.xls';
		
		
		// Criamos uma tabela HTML com o formato da planilha
		$html = '';
		$html .= '<table border="1">';
		$html .= '<tr>';
		$html .= '<td colspan="5"><center>Relatório de Contratações Odonto S.A. no período de '.$localizado.' até '.$localizado2.' - Gerado em: '.$hoje.'</center></tr>';
		$html .= '</tr>';
		
		
		$html .= '<tr>';
		$html .= '<td><b>Nome</b></td>';
		$html .= '<td><b>Data de Nascimento</b></td>';
		$html .= '<td><b>CPF</b></td>';
		$html .= '<td><b>RG</b></td>';
		$html .= '<td><b>Órgão Expedidor</b></td>';
		$html .= '<td><b>Sexo</b></td>';
		$html .= '<td><b>Nome da Mãe</b></td>';
		$html .= '<td><b>Email</b></td>';
		$html .= '<td><b>Telefone</b></td>';
		$html .= '<td><b>Celular</b></td>';
		$html .= '<td><b>Tipo de plano</b></td>';
		$html .= '<td><b>Valor total do plano</b></td>';
		$html .= '<td><b>Forma de Pagamento</b></td>';
		$html .= '<td><b>Data da Contratação</b></td>';
		$html .= '<td><b>Corretor</b></td>';
		$html .= '<td><b>CEP de Cobrança</b></td>';
		$html .= '<td><b>Logradouro</b></td>';
		$html .= '<td><b>Número</b></td>';
		$html .= '<td><b>Complemento</b></td>';
		$html .= '<td><b>Referência</b></td>';
		$html .= '<td><b>Bairro</b></td>';
		$html .= '<td><b>Cidade</b></td>';
		$html .= '<td><b>Estado</b></td>';
		$html .= '<td><b>Nome Beneficiário 1</b></td>';
		$html .= '<td><b>CPF Beneficiário 1</b></td>';
		$html .= '<td><b>Data de Nascimento Beneficiário 1</b></td>';
		$html .= '<td><b>Sexo Beneficiário 1</b></td>';
		$html .= '<td><b>Parentesco Beneficiário 1</b></td>';
		$html .= '<td><b>Nome da Mãe Beneficiário 1</b></td>';
		$html .= '<td><b>Nome Beneficiário 2</b></td>';
		$html .= '<td><b>CPF Beneficiário 2</b></td>';
		$html .= '<td><b>Data de Nascimento Beneficiário 2</b></td>';
		$html .= '<td><b>Sexo Beneficiário 2</b></td>';
		$html .= '<td><b>Parentesco Beneficiário 2</b></td>';
		$html .= '<td><b>Nome da Mãe Beneficiário 2</b></td>';
		$html .= '</tr>';
		
		//Selecionar todos os itens da tabela 
		
		$result_msg_contatos = "SELECT * FROM cadastros WHERE status='Aprovado' AND data_contratacao BETWEEN'$localizado' AND '$localizado2'";
		$resultado_msg_contatos = mysqli_query($conn , $result_msg_contatos);
		
		while($row_msg_contatos = mysqli_fetch_assoc($resultado_msg_contatos)){
			$html .= '<tr>';
			$html .= '<td>'.$row_msg_contatos["nome"].'</td>';
			$html .= '<td>'.$row_msg_contatos["datanasc"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cpf"].'</td>';
			$html .= '<td>'.$row_msg_contatos["rg"].'</td>';
			$html .= '<td>'.$row_msg_contatos["expedidor"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sexo"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomemae"].'</td>';
			$html .= '<td>'.$row_msg_contatos["email"].'</td>';
			$html .= '<td>'.$row_msg_contatos["telefone1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["celcobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["plano"].'</td>';
			$html .= '<td>'.$row_msg_contatos["valor"].'</td>';
			$html .= '<td>'.$row_msg_contatos["formapg"].'</td>';
			$data = date('d/m/Y',strtotime($row_msg_contatos["data_contratacao"]));
			$html .= '<td>'.$data.'</td>';
			$html .= '<td>'.$row_msg_contatos["corretor"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cepcobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["logradourocobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["numerocasacobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["complementocobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["referenciacobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["bairrocobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cidadecobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["ufcobranca"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomebeneficiario1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cpfbeneficiario1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nascbeneficiario1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sexobeneficiario1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["parentescobeneficiario1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomemaebenf1"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomebeneficiario2"].'</td>';
			$html .= '<td>'.$row_msg_contatos["cpfbeneficiario2"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nascbeneficiario2"].'</td>';
			$html .= '<td>'.$row_msg_contatos["sexobeneficiario2"].'</td>';
			$html .= '<td>'.$row_msg_contatos["parentescobeneficiario2"].'</td>';
			$html .= '<td>'.$row_msg_contatos["nomemaebenf2"].'</td>';
			$html .= '</tr>';
			;
		}
		// Configurações header para forçar o download
		header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
		header ("Cache-Control: no-cache, must-revalidate");
		header ("Pragma: no-cache");
		header ("Content-type: application/x-msexcel");
		header ("Content-Disposition: attachment; filename=\"{$arquivo}\"" );
		header ("Content-Description: PHP Generated Data" );
		// Envia o conteúdo do arquivo
		echo $html;
		exit; ?>
	</body>
</html>