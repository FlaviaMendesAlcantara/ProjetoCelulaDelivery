<?php
#validação se é email
public function validateEmail($par){
    if(filter_var($par,filter_validate_email)){
        return true;
    }else{
        $this -> setErro("Email inválido");
        return false;
    }
}

public function validateCPF($par){
    $cpf=preg_replace('/[0-9]/','',$par);
    if(strlen($cpf) !=11){
        $this ->setErro("cpf inválido");
        return false;
    }
}