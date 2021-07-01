<!DOCTYPE html>
<html lang="pt-BR">
   <!--titulo guia da página-->	
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Cel lanches delivery</title>      
      <link rel="stylesheet" type="text/css" href="css/reset.css">       
      <link rel="stylesheet" type="text/css" href="css/estilos.css">
      <link rel="stylesheet" type="text/css" href="css/menu.css">      
      <link rel="stylesheet" type="text/css" href="css/index.css"> 
      <link rel="stylesheet" type="text/css" href="css/rodape.css">
      <link rel="shortcut icon" type="image/x-icon" href="icon/favicon.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</head>    
  
   <!--Conteudo da página--> <!-- -->
   <body>
      <div class="conteudo">           
         <!--Cabeçalho -->
         <header id="cabecalho">
             <!--Menu-->
         <div class="menu">
            
            <ul>  <picture>               
                  <li><img src="img/logo.png" width="80"  height="80"></li>
                  </picture> 
                  <li><a href="index.php">Home</a>		</li>
                  <li><a href="paginas/contato.php">Contato</a>	</li>
                  <li><a href="paginas/quemSomos.php">Quem Somos</a>	</li>
                  <li><a href="paginas/trabalheConosco.php">Trabalhe Conosco</a></li>
                  <li><a href="paginas/registrar.php">Registrar</a></li>
                  <li><a href="paginas/produtos.php">Produtos</a></li>                  
                  <li><a href="paginas/entrar.php">Entrar</a></li>
                  <li><a href="paginas/carrinho.php"><img src="img/carrinho.png" whidth="10" heigth="10"></a></li>                  
                  <!--<li><a href="paginas/infoGeral.php">Curiosidades</a></li>-->
            </ul>
            <div class="logo"></div>
         </div>
         <hgroup>
         <h2 id="cabecalho">
          <?php
          session_start();
          if (empty($_SESSION['nome'])) {
            $nomeUsua = 'Visitante';
          } else {
            $nomeUsua = $_SESSION['nome'];
          }
          echo '<br> <center>Que bom ter você aqui. '.
            $nomeUsua .
            ' Seja Bem vindo!!</center>';
          ?>
         
         </h2>
         </hgroup> 
         </header>
         
        <section id="infoEdicao">
            <hgroup>
            <br><br>
               <h5>By Flávia Alcântara</h5>
               <h6>Atualizado em 19/05/2021</h6>
            </hgroup>
         </section>

         <aside id="lateral">
            <div class="texto"> 
            <p>Este site foi criado para facilitar o momento de comunhão da sua célula. 
               Aqui você pede o seu lanche escolhe o endereço e nós entregamos no endereço 
               da sua célula.
            </p>
            </div>
         </aside>
          
         <!--imagem principal da pagina -->
         <div class="imgFundo">
            <picture>
               <source media="(max-width:360px )" srcset="img/lanchePP.jpg" type="image/jpg">
               <source media="(max-width:760px )" srcset="img/lancheP.jpg" type="image/jpg">
               <source media="(max-width:1100px )" srcset="img/lancheM.jpg" type="image/jpg">
               <img src="img/lancheG.jpg" data-toggle="tooltip" title="Lanche da célula" alt="Lanche" width="690" height="401">
            </picture>
         </div>
      </div>          
   </body>    
   <!--rodapé -->
   <footer>
      <div class="rodape">
         <p>
            &copy; Copyright 2021 Cel lanches delivery - Todos os direitos reservados.
         </p>
      </div>
   </footer>
</html>