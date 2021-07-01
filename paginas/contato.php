<!DOCTYPE html>
<html lang="pt-BR">
<?php   $titulo="Contato - Cel lanches delivery";   
        $estilo="<link rel='stylesheet' type='text/css' href='../css/contato.css'>";?>
<!--titulo guia da página-->	
<?php include_once '../includes/cabecalho.php';?>
<!--Menu-->
<div class="menu"> 
<?php include_once '../includes/menu.php';?>
</div>
<!--conteudo da contato-->
<body>
<header id="cabecalho">
    <h2>Entre em contato conosco através do formulário abaixo:</h2>
</header>
    <div class="conteudo">
              <!--formulario de dados-->        
        <form action="../paginas/contato.php" method="POST" id="form_contato">
            <div class="formulario">
            <label for="Nome">Nome</label>    
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="Nome" required>    
            <label for="Email">Email</label>     
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" required>
            <small id="email" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
            <label for="assunto">Assunto</label>    
            <input type="text" class="form-control" id="assunto" name="assunto" aria-describedby="assunto" required> <br>
            <textarea placeholder="Digite aqui a sua mensagem" rows="5" id="mensagem" name="mensagem" cols="41" required></textarea>
            <button type="submit" class="btn btn-primary">Enviar</button>
                </div> 
        </form> 
      </div>	   
   </body>
   <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>

</html>