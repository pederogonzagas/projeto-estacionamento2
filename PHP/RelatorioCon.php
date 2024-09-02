<?php
    //Conectando a classe ao projeto
    namespace Projeto\projetoEstacionamento\php;
    //Cololar qual classe eu utilizar
    require_once("Controle.php");
    //Mostrar quem eu vou usar - reforço
    use Projeto\estacionamento\php\Controle;
     //Instanciando um objeto da classe pessoa / Cadastrando
 
   
    $cliente1 = new Controle("23186", "08:00", "12:00", "17/05/2024", "ford focus", 40);
    echo $cliente1->imprimir()."<br>";
   
 
?>    