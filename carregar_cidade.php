<?php include_once("conexao.php");

	$id_categoria = $_REQUEST['uf'];
	
	$result_sub_cat = "SELECT * FROM cidades WHERE estado_id=$id_categoria ORDER BY nome";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$sub_categorias_post[] = array(
			'id'	=> $row_sub_cat['id'],
			'nome' => utf8_encode($row_sub_cat['nome']),
		);
	}
	
	echo(json_encode($sub_categorias_post));
