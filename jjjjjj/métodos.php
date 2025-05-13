<?php
class Caneta{
    private $ponta;
    public $cor;

    public function __construct($ponta, $cor){
        $this->ponta = 1;
        $this->cor = $cor;
    }
    public function getPonta(){
       echo"Cor da caneta:".$this->cor."<br>";
    }
    public function setPonta($cor){
    $this->cor = $cor;
    }
    public function MostraCaneta(){
        echo "<br>########## <br>Caneta: <br> Ponta:". $this->ponta;
        echo"<br>Cor:". $this->cor;
}
}
$c1 = new Caneta(10.2, "branca");
$c1

?>