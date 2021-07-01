<!DOCTYPE html>
<html lang="pt-BR">
<?php   $titulo='Trabalhe conosco - Cel lanches delivery';   
        $estilo='<link rel="stylesheet" type="text/css" href="../css/trabConosco.css">';?>
<html lang="pt-BR">
   <!--titulo guia da página-->	
   <?php include_once '../includes/cabecalho.php'; ?>    
   <!--Menu-->
<div class="menu"> 
   <?php include_once '../includes/menu.php';?>
</div>
<body>
	<!--formulario-->
   <header id="cabecalho">
    <br><h2>Envie seus dados através do formulário abaixo:</h2><br><br>
    </header>
	   <div class="formulario"> 
		   <form action="../paginas/trabConosco.php" method="POST" name="formulario-trab-conosco" >
            <label for="Nome-Completo">Nome completo</label><br>
            <input type="text" id="nomeCompleto" name="nomeCompleto" placeholder="Seu nome completo" required><br><br>
            <label for="Email">Email</label><br>
            <input type="email" id="curri-email" name="curriEmail" placeholder="seuemail@email.com" required><br><br>
            <label  for="Curriculo">Anexar Currículo</label><br>
            <input type="file" id="arquivoCurri" name="nameCurri"><br><br>   
            <button type="submit" class="btn btn-primary">Enviar </button>
         </form>
      </div> 
         <!--conteudo da Trabalhe conosco-->
         
        <div class="conteudo"> 
        <p>  </p>
        </div>
	</body>
    <!--Rodape-->
 <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>