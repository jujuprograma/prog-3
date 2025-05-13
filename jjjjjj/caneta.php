<?php
//definindo classe caneta
class Caneta{
//denifir atributos
      public $cor;
      public $marca;
      public $ponta;
      public $tamanho;
      public $carga;

      //definir métodos
      
      public function escrever(){
      echo "Escrevendo...<br>";
}
      public function rabiscar() {
      echo "Rabiscando...<br>";}

      public function sublinhar() {
      echo "Sublinhando...<br>";}

      public function pintar() {
      echo "Pintando...<br>";}
}
//instanciando a classe Caneta
$caneta1 = new Caneta();
//como os atributos da minha classe são publicos, podemos acessá-los diretamente
$caneta1->cor = "azul";
$caneta1->marca = "BIC";
$caneta1->ponta = 0.5;
$caneta1->tamanho = "grande";
$caneta1->carga = 100;

//exibindo os atributos da caneta
echo "cor:". $caneta1->cor ."<br>";
echo "marca:".$caneta1->marca."<br>";
echo "ponta:".$caneta1->ponta."<br>";
echo "tamanho:".$caneta1->tamanho."<br>";
echo "carga:".$caneta1->carga."<br>";

//chamar os métodos da canta
$caneta1->escrever();
$caneta1->rabiscar();
$caneta1->sublinhar();
$caneta1->pintar();
?>