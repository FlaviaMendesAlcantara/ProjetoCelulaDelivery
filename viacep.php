<!DOCTYPE html>
<html lang="pt-BR">
<?php   $titulo='Registrar - Cel lanches delivery';  		
		$estilo='<link rel="stylesheet" type="text/css" href="css/registrar.css">';?>
<html lang="pt-BR">
   <!--titulo guia da página-->	
   <?php include_once('includes/cabecalho.php');?>    
   <!--Menu-->
<div class="menu">
   <?php include_once('includes/menu.php');?>
</div>
   <!--conteudo da Registrar-->    
  <body>
  <form action="" method="POST" >  
  <center>
    <h3>Preenche dados pelo CEP</h3>
    <label for="cep">CEP</label><br>
    <input type="text" id="cep" name="cep"  required><br><br>

    <label for="rua">Rua</label><br>
    <input type="text" id="rua" name="rua" required><br><br>
  
    <label for="numero">Número</label><br>
    <input type="text" id="numero" name="numero" required><br><br>

    <label for="bairro">Bairro</label><br>
    <input type="text" id="bairro" name="bairro" required><br><br>

    <label for="cidade">cidade</label><br>
    <input type="text" id="cidade" name="cidade" required><br><br>

    <label for="estado">Estado</label><br>
    <input type="text" id="estado" name="estado" required><br><br>
    </center>
  </form>
  
   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   <script>
    type="text/javascript">
    $("#cep").focusout(function(){
      $.ajax({
        // o campo url informa o caminho de onde virar os dados do cep
        // deve se concatenar o valor digitado no cep
        url:'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
        // aqui inform o tipo de dados a ser lido nesse caso aqui json
        dateType:'json',
        // sucess é o que ele deve fazer se a funcao der certo
        // o parametro da funcao é o nome da variavel que vai ler esse objeto
        success: function(resposta){
          // aqui define os valores que vc deseja preeencher automaticamento com o retorno da funcao
          $("#rua").val(resposta.logradouro);
          $("#bairro").val(resposta.bairro);
          $("#cidade").val(resposta.localidade);
          $("#estado").val(resposta.uf);
          //focar campo numero
          $("#numero").focus();
        }
      });
    });
   </script>
  </body>
      <!--rodapé-->
   <?php include_once 'includes/rodape.php';?>
</html>
