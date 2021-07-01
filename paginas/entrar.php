<!DOCTYPE html>
<html lang="pt-BR">
<?php   session_start();
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);       

        $titulo='Entrar - Cel lanches delivery';   
        $estilo='<link rel="stylesheet" type="text/css" href="../css/entrar.css">';?>
	<!-- Titulo da guia de navegação-->
	<?php include_once '../includes/cabecalho.php';?>	
    <!--menu-->
     <div class="menu">
     <?php include_once '../includes/menu.php';?>
    </div>    
	<!--conteudo da Entrar-->  
	<body>     
    <header id="cabecalho">
    <br><br><h2>Login</h2><br><br> 
    </header>  
    <div class="conteudo">    
		<form action="../session_login/session.php" method="POST" name="formulario-login" action="../paginas/entrar.php">  
            <div class="formulario">  
            <?php 
                 if(isset($_SESSION['erroLogin']))
                 echo "<center><h6>".$_SESSION['erroLogin']."</h6></center>";
            ?>
            <label for="Login">Login</label><br>
            <input type="text" id="login" name="login" placeholder="digite seu login" required><br><br>
            <label  for="Login-senha">Senha</label><br>
            <input type="password" id="loginsenha" name="loginsenha" placeholder="digite sua senha" required><br><br>              
           <button type="submit" class="btn btn-primary">Entrar</button><br>

            </div>
        </form>
    </div>
	</body>
    <!--rodapé-->
    <?php include_once '../includes/rodape.php';?>    
</html>