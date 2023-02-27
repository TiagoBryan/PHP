<?php

//classe
public class Pessoa(){
    //atributos
    private $nome;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;
    


    //metodo get
    public function getNome(){
    return $this -> nome;

    } 

    public function getEndereco(){
        return $this -> endereco;
    
    }

    public function getBairro(){
            return $this -> bairro;
        
    }

    public function getCep(){
        return $this -> cep;
    
    }

    public function getCidade(){
        return $this -> cidade;
    
    }

    public function getEstado(){
        return $this -> estado;
    
    }
    //metodo set
    public function setNome($nome){

        $this->nome = $nome;
    }
    public function setEndereco($endereco){

        $this->endereco = $endereco;
    }
    public function setBairro($bairro){

        $this->bairro = $bairro;
    }
    public function setCep($cep){

        $this->cep = $cep;
    }
    public function setCidade($cidade){

        $this->cidade = $cidade;
    }
    public function setEstado($estado){

        $this->estado = $estado;
    }

    /*
    .
    .
    .
    Deve-se colocar todos os métodos get e set correpondente a classe pessoa()
    */
}
?>