<!DOCTYPE html>
<html lang="pt-BR">

	<!-- Titulo da guia de navegação-->
	<head>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Entrar - Cel lanches delivery</title>
        <link rel="icon" type="image/png" href="../icon/favicon.png" sizes="16x16">
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
        <link rel="stylesheet" type="text/css" href="../css/menu.css">
        <link rel="stylesheet" type="text/css" href="../css/rodape.css">     
        <link rel="stylesheet" type="text/css" href="../css/entrar.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
      
   		
	</head>
	
    <!--menu-->
     <div class="menu">
            <ul>
               <li><img src="../img/logo.png" width="80"  height="80"></li>
               <li><a href="../index.html">Home</a>		</li>
               <li><a href="../paginas/contato.html">Contato</a>	</li>
               <li><a href="../paginas/quemSomos.html">Quem Somos</a>	</li>
               <li><a href="../paginas/trabalheConosco.html">Trabalhe Conosco</a></li>
               <li><a href="../paginas/registrar.html">Registrar</a></li>
               <li><a href="../paginas/entrar.html">Entrar</a></li>
               <li><a href="../paginas/infoGeral.html">Curiosidades</a></li>
            </ul>
            <div class="logo"></div>
    </div>

    <body>
    <div class="conteudo">    
    <br><br><h2><center>Login</center></h2><br><br>
	<!--conteudo da Entrar-->  
	       
		<form action="../session_login/session.php" method="POST" name="formulario-login" action="entrar.php">  
            <div class="formulario">  
            <label for="Login">Login</label><br>
            <input type="text" id="login" name="login" placeholder="digite seu login" required><br><br>
            <label  for="Login-senha">Senha</label><br>
            <input type="password" id="loginsenha" name="loginsenha" placeholder="digite sua senha" required><br><br>              
           <center><button type="submit" class="btn btn-primary">Entrar</button></center><br>
		   <?php
                session_start();
                if(isset($_SESSION['erroLogin']))
                echo "<h3>".$_SESSION['erroLogin']."</h3>";
           ?> 
            </div>
        </form>
    </div>
	</body>
     <!--Rodape-->
          <footer>
      <div class="rodape">
         <p>Ⓒ Copyright 2020 Cel lanches delivery - Todos os direitos reservados.</p>
      </div>
   </footer>
</html>