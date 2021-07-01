<?php 
  include_once("conexao.php");

	$id_categoria = $_REQUEST['id_categoria'];	
	$result_sub_cat = "SELECT * FROM cidade WHERE Uf='$id_categoria' ORDER BY Nome";
	$resultado_sub_cat = mysqli_query($conn, $result_sub_cat);
	
	while ($row_sub_cat = mysqli_fetch_assoc($resultado_sub_cat) ) {
		$resultao_sub_cat[] = array(
			'Uf'	=> $row_sub_cat['Uf'],
			'nome' => $row_sub_cat['Nome'],
		);
	}
	
	echo(json_encode($resultao_sub_cat));
