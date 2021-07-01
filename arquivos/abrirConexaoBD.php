<?php  

    $caminho='localhost';
    $usuario= 'root';
    $senha='';
    $bd='bd_celula_delivery';
    $porta='3308';
     /*conexao com o banco*/ 
    $conexao = mysqli_connect($caminho,$usuario,$senha,$bd,$porta); 
  
    /*// teste se a conexao funciona  
   mysqli_select_db($conexao,'bd_celula_delivery') or die( 'Não foi possível conectar ao banco MySQL');
   if (!$conexao) {echo 'Não foi possível conectar ao banco MySQL.
   '; exit;}
   else {echo 'Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
   ';}
   mysqli_close($conexao);*/    
    
?>