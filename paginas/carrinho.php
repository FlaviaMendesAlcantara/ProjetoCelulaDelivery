<?php
    session_start();
    $_SESSION['erroLogin']="<div class='alert alert-danger'>Para acessar o carrinho é preciso estar logado</div>";
    if(isset($_SESSION['erroLogin'])){        
    header("location: ../paginas/entrar.php");
       }else{
        
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<?php  $titulo='Carrinho - Cel lanches delivery';  		
	   $estilo='<link rel="stylesheet" type="text/css" href="../css/carrinho.css">';?>
     <?php include_once '../includes/cabecalho.php'; ?> 

    <div class="menu">
        <?php include_once '../includes/menu.php';?>
        </div>

    <body>
        <div class="container">
        <header id="cabecalho">   
        <br><br>
        <h2>Carrinho de Compras</h2>   
        </header>     
        </div>   
    </body>    
     <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>