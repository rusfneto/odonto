<?php
include_once("conexao.php");

function retorna($cpf, $conn){
	$result_consulta = "SELECT * FROM cadastros WHERE cpf = '$cpf' LIMIT 1";
	$resultado_consulta = mysqli_query($conn, $result_consulta);
	if($resultado_consulta->num_rows){
		$row_consultada = mysqli_fetch_assoc($resultado_consulta);
		//verificação de RG
		$valores['nome'] = $row_consultada['nome'];
		$valores['status'] = $row_consultada['status'];
		$valores['datanasc'] = $row_consultada['datanasc'];
		$valores['sexo'] = $row_consultada['sexo'];
		$valores['rg'] = $row_consultada['rg'];
		$valores['expedidor'] = $row_consultada['expedidor'];
		$valores['nomemae'] = $row_consultada['nomemae'];
		//verificação de RG beneficiário 1
		$valores['nomebeneficiario1'] = $row_consultada['nomebeneficiario1'];
		$valores['cpfbeneficiario1'] = $row_consultada['cpfbeneficiario1'];
		$valores['nascbeneficiario1'] = $row_consultada['nascbeneficiario1'];
		$valores['sexobeneficiario1'] = $row_consultada['sexobeneficiario1'];
		//verificação de RG beneficiário 2
		$valores['nomebeneficiario2'] = $row_consultada['nomebeneficiario2'];
		$valores['cpfbeneficiario2'] = $row_consultada['cpfbeneficiario2'];
		$valores['nascbeneficiario2'] = $row_consultada['nascbeneficiario2'];
		$valores['sexobeneficiario2'] = $row_consultada['sexobeneficiario2'];
		//verificação de comprovante de residência
		$valores['logradourocobranca'] = $row_consultada['logradourocobranca'];
		$valores['numerocasacobranca'] = $row_consultada['numerocasacobranca'];
		$valores['bairrocobranca'] = $row_consultada['bairrocobranca'];
		$valores['cidadecobranca'] = $row_consultada['cidadecobranca'];
		$valores['ufcobranca'] = $row_consultada['ufcobranca'];
		//forma de pagamento
		$valores['formapg'] = $row_consultada['formapg'];
		
	}else{
		$valores['nome'] = 'Contratação não localizada';
		$valores['status'] = 'Contratação não localizada';
		$valores['datanasc'] = 'Contratação não localizada';
		$valores['sexo'] = 'Contratação não localizada';
		$valores['rg'] = 'Contratação não localizada';
		$valores['expedidor'] = 'Contratação não localizada';
		$valores['nomemae'] = 'Contratação não localizada';
		$valores['nomebeneficiario1'] = 'Contratação não localizada';
		$valores['cpfbeneficiario1'] = 'Contratação não localizada';
		$valores['nascbeneficiario1'] = 'Contratação não localizada';
		$valores['sexobeneficiario1'] = 'Contratação não localizada';
		$valores['nomebeneficiario2'] = 'Contratação não localizada';
		$valores['cpfbeneficiario2'] = 'Contratação não localizada';
		$valores['nascbeneficiario2'] = 'Contratação não localizada';
		$valores['sexobeneficiario2'] = 'Contratação não localizada';
		$valores['logradourocobranca'] = 'Contratação não localizada';
		$valores['numerocasacobranca'] = 'Contratação não localizada';
		$valores['bairrocobranca'] = 'Contratação não localizada';
		$valores['cidadecobranca'] = 'Contratação não localizada';
		$valores['ufcobranca'] = 'Contratação não localizada';
		$valores['formapg'] = 'Contratação não localizada';
	}
	return json_encode($valores);
}

if(isset($_GET['cpf'])){
	echo retorna($_GET['cpf'], $conn);
}
?>