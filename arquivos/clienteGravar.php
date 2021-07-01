<?php   
    
    $nomeCompleto= $_POST["nomeRegis"].' '.$_POST["sobrenomeRegis"];
    $cpf= $_POST["cpf"];
    $senha= $_POST["senhaRegis"];
   
    $idUsuario=$_SESSION['id_usuario'];
   
     /*conexao com o banco*/ 
    $conexao = mysqli_connect('localhost','root','','bd_celula_delivery','3308');  
    $dados= "SELECT * FROM clientes WHERE cpf = {$cpf} and dt_exclusao is null" ;
    $resultado = mysqli_query($conexao,$dados);
    if(mysqli_num_rows($resultado)>0){
        $upd ="UPDATE  usuarios SET dt_exclusao = now() where id_usu ={$idUsuario}";
        mysqli_query($conexao,$upd);
        session_start();
        $session_start['msg']="<div class='alert alert-danger'>Já existe um usuário cadastrado com esse cpf  ({$cpf}).</div>";

    }else
        {
        $query= "INSERT INTO clientes (nome_completo, cpf, dt_cadastro, id_usuario) VALUES ('{$nomeCompleto}', '{$cpf}', now(), '{$idUsuario}')";
        mysqli_query($conexao,$query);
        $_SESSION['msg']="<div class='alert alert-success'>login de usuário criado com sucesso!</div>";
        }
        mysqli_close($conexao);

?>


