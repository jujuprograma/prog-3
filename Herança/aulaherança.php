<?php
class Veiculo {
    public $modelo;
    public $cor;
    public $ano;

    public function andar() {
        echo "Andou\n";
    }

    public function parar() {
        echo "Parou\n";
    }
}

class Carro extends Veiculo {
    public $tipoCombustivel;

    public function mostrarCombustivel() {
        echo "Tipo de combustível: " . $this->tipoCombustivel . "\n";
    }
}

class Moto extends Veiculo {
    public function andar() {
        echo "Moto está em movimento\n";
    }

    public function darGrau() {
        echo "Deu grau!\n";
    }
}

class Caminhao extends Veiculo {
    public function carregarCarga() {
        echo "Carga carregada com sucesso!\n";
    }
}

class CarroEletrico extends Carro {
    public function carregarBateria() {
        echo "Bateria carregada\n";
    }
}


$carro1 = new Carro();
$carro1->modelo = "Gol";
$carro1->cor = "Vermelho";
$carro1->ano = 2018;
$carro1->tipoCombustivel = "Gasolina";
$carro1->andar();
$carro1->mostrarCombustivel();

echo "<hr>";

$carro2 = new Carro();
$carro2->modelo = "vectra";
$carro2->cor = "Preto";
$carro2->ano = 2011;
$carro2->tipoCombustivel = "Álcool";
$carro2->andar();
$carro2->mostrarCombustivel();

echo "<hr>";

$moto1 = new Moto();
$moto1->modelo = "Honda Biz";
$moto1->cor = "Azul";
$moto1->ano = 2017;
$moto1->andar();
$moto1->darGrau();

echo "<hr>";

$moto2 = new Moto();
$moto2->modelo = "Meteor 350";
$moto2->cor = "Verde";
$moto2->ano = 2018;
$moto2->andar();
$moto2->darGrau();

echo "<hr>";

$caminhao = new Caminhao();
$caminhao->modelo = "Mercedez-benz-acello";
$caminhao->cor = "rosa";
$caminhao->ano = 2015;
$caminhao->carregarCarga();

echo "<hr>";

$carroEletrico = new CarroEletrico();
$carroEletrico->modelo = "Tesla cybertruck";
$carroEletrico->cor = "Cinza";
$carroEletrico->ano = 2024;
$carroEletrico->tipoCombustivel = "Elétrico";
$carroEletrico->andar();
$carroEletrico->mostrarCombustivel();
$carroEletrico->carregarBateria();
?>
