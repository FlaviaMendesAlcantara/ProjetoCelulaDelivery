<?php
include_once('../arquivos/abrirConexaoBD.php');

@$uf_estado = $_POST['selectEstado']; 

$queryCidade = "SELECT * from cidade WHERE Uf='$uf_estado' order by Nome";
$resultadoCid=mysqli_query($conexao,$queryCidade);

while($row_sel_cidade = mysqli_fetch_assoc($resultadoCid)){
    $cidades_post[] = array(        
        'Uf' => $row_sel_cidade['Uf'],
        'Nome' => $row_sel_cidade['Nome'],
    );
}
   // echo (json_encode($cidades_post));
?>
