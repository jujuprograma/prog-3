<?php

class Produto{
    //definir atributos

    public $nome;

    public $preco;

    public $quantidade;

    public function exibirDetalhes() {
        echo "exibindo detalhes";
    }
}
    // como os atributos da classe Caneta são publicos, podemos acessá-los diretamente

$Produto1 = new Produto();
$Produto1->nome = "chuteira joma";
$Produto1->preco = 600;
$Produto1->quantidade = "1";

echo "Nome: " . $Produto1->nome. ", " ; 
echo "Preço: " . $Produto1->preco. ", " ;
echo "Quantidade: " . $Produto1->quantidade.", <br>" ;
$Produto1->exibirDetalhes();


$Produto2 = new Produto();
$Produto2->nome = "joelheira";
$Produto2->preco = 150;
$Produto2->quantidade = "1";

echo "<br>Nome: " . $Produto2->nome.", "  ;
echo "Preço: " . $Produto2->preco.", ";
echo "Quantidade: " . $Produto2->quantidade.", <br>";
$Produto2->exibirDetalhes();

function mostrarMediaPrecos ($Produto1, $Produto2){

    $media = ($Produto1->preco + $Produto2->preco) / 2;
    echo "<br>A média dos preços dos produtos é: R$".$media;

}
mostrarMediaPrecos($Produto1, $Produto2);




   
?>