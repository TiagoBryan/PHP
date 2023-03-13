<?php 
require_once("pessoa.class.php");

 class Teste{
     private $pessoa;
    
     public function __construct(){
         $pessoa = new pessoa();

         $pessoa-> setNome($_POST['nome']);
         echo $pessoa->getNome();
     }
 }new Teste();

?>