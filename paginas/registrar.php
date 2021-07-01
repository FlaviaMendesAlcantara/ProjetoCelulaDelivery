<!DOCTYPE html>
<html lang="pt-BR">
<?php  $titulo='Registrar - Cel lanches delivery';  		
		   $estilo='<link rel="stylesheet" type="text/css" href="../css/registrar.css">';?>
   <!--titulo guia da página-->	
   <?php include_once '../includes/cabecalho.php'; ?>    
   <!--Menu-->
<div class="menu">
   <?php include_once '../includes/menu.php';?>
</div>
   <!--conteudo da Registrar-->    
  <body> 
  <header id="cabecalho">   
  <br><h2>Crie seu cadastro preenchendo o formulário abaixo:</h2><br>
</header>
  <div class="formulario">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">        

          <form action="../arquivos/registrarSalvar" method="POST" name="formulario-registrar">                 
          <?php
          session_start();
          if(isset($_SESSION['msg'])){
            echo ($_SESSION['msg']);
            unset($_SESSION['msg']);
          }                   
          ?>
             <div class="form-group">
                <label for="NomeRegis">Nome</label><br>
                <input type="text" id="nomeRegis" name="nomeRegis" placeholder="Seu nome" required><br><br>
             </div>

              <div class="form-group">
                <label for="SobrenomeRegis">Sobrenome</label><br>
                <input type="text" id="sobrenomeRegis" name="sobrenomeRegis" placeholder="Seu sobrenome" required><br><br>
              </div>

              <div class="form-group">
                <label for="cpf">CPF</label><br>
                <input type="text" id="cpf" name="cpf" required><br><br>
              </div>

              <div class="form-group">
                <label for="Email">Email</label><br>
                <input type="emailRegis" id="emailRegis" name="emailRegis" placeholder="seuemail@email.com" required><br><br>
              </div>

              <div class="form-group">
                <label  for="SenhaRegis">Senha</label><br>
                <input type="password" id="senhaRegis" name="senhaRegis" placeholder="senha" required><br><br>
              </div>    
            
            <div class="col-lg-3">  
                <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>     
            </div> 
          </form>        
         </div>
        </div>       
       </div>
    </div>   
	</body>
      <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>