<?php
    
    include_once ('abrirConexaoBD.php');


    
    
    /*
   class estado_model extends CI_model {
        
        public function __construct(){
            parent::_construct();
        }

       //Traz todos os estados cadastrados
        public function getAll(){
            return $this->db
                ->order_by('Nome')
                ->get('estado');
        }
        // monta o select do estado
        public function selectEstado(){
            $options= "<option value=''> Selecione o Estado</option>";
            $estados = $this->getAll();

            foreach($estados -> result() as $estado){
                $options .= "<option value='{$estado->Id}'>{$estado->Nome}<option>";
            }

            return $options;
        }
    }*/

?>