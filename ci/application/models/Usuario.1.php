<?php

class Usuario extends CI_Model{
    private $nome;
    
    public function criar($nome){
        $this->nome = $nome;
    }
    
    //SO TESTE
    public function mostrar(){
        echo "<h1> $this->nome </h1>";
    }
    
    public function toArray(){
        return get_object_vars($this);
    }
}

?>

