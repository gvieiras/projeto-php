<?php

class UsuarioDAO extends CI_Model{
    
    public function inserir(Usuario $usr){
        $this->db->insert("Nomes",$usr->toArray());
    }
    
}

?>