<?php   
    $nomeCompleto= $_POST["nomeRegis"].' '.$_POST["sobrenomeRegis"];
    $email= $_POST["emailRegis"];
    $senha= $_POST["senhaRegis"];
    $cpf = $_POST["cpf"];
    $validaCpf=function validateCPF($cpf);
    if(validaCpf                                              ){

    }

    session_start();
    unset($_SESSION['msg']);
     /*conexao com o banco*/ 
    $conexao = mysqli_connect('localhost','root','','bd_celula_delivery','3308'); 
    $dados="SELECT login FROM usuarios WHERE login = '{$email}' and dt_exclusao is null";
    $dadosCli="SELECT * FROM clientes WHERE cpf = {$cpf} and dt_exclusao is null" ;
    $resultado=mysqli_query($conexao,$dados);
    $resultCli= mysqli_query($conexao,$dadosCli);

    if(mysqli_num_rows($resultado)>0){
        $_SESSION['msg']="<div class='alert alert-danger'>Já existe um usuário cadastrado com esse email  ({$email}).</div>";     
    }elseif(mysqli_num_rows($resultCli)>0){    
        $_SESSION['msg']="<div class='alert alert-danger'>Já existe um usuário cadastrado com esse CPF  ({$cpf}).</div>";     
    }else{
        $query="insert into usuarios (nome_completo, login,senha,dt_cadastro) values ('{$nomeCompleto}','{$email}','{$senha}',now())";
        mysqli_query($conexao,$query);  
        $id_usuario= mysqli_insert_id($conexao);      
        $_SESSION['id_usuario']=$id_usuario;
        
    }
    mysqli_close($conexao);

?>


