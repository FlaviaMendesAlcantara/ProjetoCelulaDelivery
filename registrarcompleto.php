<!DOCTYPE html>
<html lang="pt-BR">
<?php  $titulo='Registrar - Cel lanches delivery';  		
		   $estilo='<link rel="stylesheet" type="text/css" href="../css/registrar.css">';?>
<html lang="pt-BR">
   <!--titulo guia da página-->	
   <?php include_once '../includes/cabecalho.php'; ?>    
   <!--Menu-->
<div class="menu">
   <?php include_once '../includes/menu.php';?>
</div>
   <!--conteudo da Registrar-->    
  <body>
  <?php include_once('../arquivos/abrirConexaoBD.php');?>
  <?php @include_once('../arquivos/cidades_post.php');?>  
  
  <br><h2><center>Crie seu cadastro preenchendo o formulário abaixo:</center></h2><br>
  <div class="formulario" align="center">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          
          <h3>Etapa: <span id="passo"></span></h3> 
          <form action="" method="POST" name="formulario-registrar">         
                   
            <div id="step_1" class="step">   
              <div class="form-group">
                <label for="NomeRegis">Nome</label><br>
                <input type="text" id="nomeRegis" name="nomeRegis" placeholder="Seu nome" required><br><br>
              </div>
              <div class="form-group">
                <label for="SobrenomeRegis">Sobrenome</label><br>
                <input type="text" id="sobrenomeRegis" name="sobrenomeRegis" placeholder="Seu sobrenome" required><br><br>
              </div>
              <div class="form-group">
                <label for="Email">Email</label><br>
                <input type="emailRegis" id="emailRegis" name="emailRegis" placeholder="seuemail@email.com" required><br><br>
              </div>
              <div class="form-group">
                <label  for="SenhaRegis">Senha</label><br>
                <input type="password" id="senhaRegis" name="senhaRegis" placeholder="senha" required><br><br>
              </div>                        
            </div>
            

            <div id="step_2" class="step">  
              <div class="form-group">
                <label  for="estado">Estados</label><br>              
                <select id="selectEstado" name="selectEstado"><br><br>
                <option value="">Selecione o estado</option>
                < ?php     $query_estado="SELECT * FROM estado order by Nome";
                          $result_estados= mysqli_query($conexao,$query_estado);
                          
                          while($row_estado_post = mysqli_fetch_assoc($result_estados)){
                           echo  '<option value="'.$row_estado_post['Uf'].'">'.$row_estado_post['Nome'].'</option>';                             
                          }
                          ?>                      
                </select>              
              </div>
              <div class="form-group">
                <label for="Cidade">Cidade</label><br>
                <span class="carregando">Aguarde, carregando...</span>
                <select id="selectCidade" name="selectCidade"><br><br>
                <option value="">Selecione a Cidade</option>                               
                </select><br><br>                         
              </div>
              <div class="form-group">
                <label for="cep">CEP</label><br>
                <input type="text" id="cep" name="cep" placeholder="Ex:00.000-000" required><br><br>
              </div>
              <div class="form-group">
                <label for="rua">Rua</label><br>
                <input type="text" id="rua" name="rua" placeholder="Ex: Av josé de alencar" required><br><br>
              </div>
              <div class="form-group">
                <label for="numero">Número</label><br>
                <input type="text" id="" name="numero" required><br><br>
              </div>
              <div class="form-group">
                <label for="complemento">Complemento</label><br>
                <input type="text" id="complemento" name="complemento" placeholder="Ex: Bloco 15 Ap 305" required><br><br>
              </div>           
           </div>
            
           
            <div id="step_3" class="step"> 
              <div class="form-group">
                <label for="telefone">Telefone para contato</label><br>
                <input type="text" id="telefone" name="telefone" placeholder="Ex: (99)99999-9999)" required><br><br>
              </div>
              <div class="form-group">
                <label for="referencia">Ponto Referencia</label><br>
                <input type="text" id="referencia" name="referencia" placeholder="Ex: proximo ao supermercado carrefour" required><br><br>  
              </div>
              
              <div class="col-lg-3">  
                <button type="submit" class="btn btn-sm btn-primary">Cadastrar</button>     
              </div>
            </div>       
         
         </div> 
          </form>        

          </div>       
       </div>
       
       <div class="row">
          <div class="col-lg-6" style="text-align: center;">
            <button class="btn btn-block btn-secondary" id="prev">Anterior</button>
          </div>
          <div class="col-lg-6" style="text-align: center;">
            <button class="btn btn-block btn-secondary" id="next">Próximo</button>
          </div>
        </div>        
   </div>   
      
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
      <!-- Funçao que carrega as cidades filtradas pelo estado-->
		<script type="text/javascript">
		$(function(){
			$('#selectEstado').change(function(){
				if( $(this).val() ) {
					$('#selectCidade').hide();
					$('.carregando').show();
					$.getJSON('../arquivos/cidades_post.php?search=',{selectEstado: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha a Cidade</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].Uf + '">' + j[i].Nome + '</option>';
						}	
						$('#selectCidade').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#selectCidade').html('<option value="">– Escolha a cidade –</option>');
				}
			});
		});
		</script>

	</body>
      <!--rodapé-->
   <?php include_once '../includes/rodape.php';?>
</html>