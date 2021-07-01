<?php  
  /**/ 
    /*inicia a sessao*/
    session_start();
   /* cria variaveis e obtem o login e senha*/
    $login=$_POST['login'];
    $senha=$_POST['loginsenha'];
    $nome='';
    $linha='';
    /*limpa a sessao*/
    unset($_SESSION['login']);
    unset($_SESSION['senha']);
    unset($_SESSION['nome']);
    unset($_SESSION['erroLogin']);
     /*conexao com o banco*/ 
    $conexao = mysqli_connect('localhost','root','','bd_celula_delivery','3308'); 
  
    /* teste se a conexao funciona  
   mysqli_select_db($conexao,'bd_celula_delivery') or die( 'Não foi possível conectar ao banco MySQL');
   if (!$conexao) {echo 'Não foi possível conectar ao banco MySQL.
   '; exit;}
   else {echo 'Parabéns!! A conexão ao banco de dados ocorreu normalmente!.
   ';}
   mysqli_close($conexao);*/

    /*obtem o resultado do banco de dados*/ 
    $resultado= mysqli_query($conexao,"Select login,senha,nome_completo from usuarios where login = '$login' and senha='$senha'"); 
    /*Obter a linha de dados recuperados do banco*/
    $linha=mysqli_fetch_assoc($resultado); 
    $nome= $linha['nome_completo'];  
    $nome=explode(" ",$nome);
    if($nome != ""){        
    }else{
        $nome="Visitante";
    }
    /*verifica se o login e esta correto e coloca na sessao*/ 
    if(mysqli_num_rows($resultado) >0){
        $_SESSION['login']=$login;
        $_SESSION['senha']=$senha;
        $_SESSION['nome']=$nome[0];        
        header('location:../index.php');        
    }
    else{
        $_SESSION['erroLogin']="<div class='alert alert-danger'> Usuário e/ou senha inválido </div>";
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        unset($_SESSION['nome']);
        header('location:../paginas/entrar.php');       
    };
    mysqli_close($conexao);
    
?>