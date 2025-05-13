<?php
class Carro{
   private $modelo;
   private $cor;
   private $ano;

   public function __construct($modelo,$cor,$ano){
    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ano = $ano;
   }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    
    public function setCor($cor){
        $this->cor = $cor;
    }
    
    public function getAno(){
        return $this->ano;
    }

    public function setAno($ano){
        $this->ano = $ano;
    }
}

    $carro = new Carro(0, 0, 0);
    print_r($carro);
    $carro->setModelo("Astra");
    $carro->setCor("Branco");
    $carro->setAno(2015);

    echo "A cor do carro é: " . $carro->getCor() . "<br>";
    echo "O ano do carro é: " . $carro->getAno() . "<br>";
    echo "O modelo do carro é: " . $carro->getModelo() . "<br>";
?>