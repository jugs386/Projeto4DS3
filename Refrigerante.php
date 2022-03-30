<?php

require_once 'Bebida.php';

class Refrigerante extends Bebida{

    private $retornavel;

    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function getRetornavel(){
        if($this->retornavel == true){
            $resultado = "Sim";
        }else{
            $resultado = "Não";
        }
        return $resultado;
    }

    public function mostraBebida()
    {
        $dados = "Nome: ".$this->getNome().
                "<br/>Preço: ".$this->getPreco().
                "<br/>Retornavel: ".$this->getRetornavel();
        
        return $dados;
    }

    public function verificaPreco($preco)
    {
        $resultado = false;
        if($preco < 5){
            $resultado = true;
        }
        return $resultado;
    }

}

?>