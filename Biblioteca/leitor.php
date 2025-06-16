<?php
class Leitor {
    private $nome;
    private $email;
    private $telefone;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function exibirLeitor() {
        echo "<br>Nome: " . $this->nome . "\n";
        echo "Email: " . $this->email . "\n";
        echo "Telefone: " . $this->telefone . "\n";
    }
}
?>
