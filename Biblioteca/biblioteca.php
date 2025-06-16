<?php
class Biblioteca {
    public $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nome) {
        $this->nomeBiblioteca = $nome;
    }

    public function adicionarLivro(Livro $livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor(Leitor $leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        echo "Livros na biblioteca:\n";
        foreach ($this->livros as $livro) {
            $livro->exibirInformacoes();
            echo "\n";
        }
    }

    public function listarLeitores() {
        echo "Leitores cadastrados:\n";
        foreach ($this->leitores as $leitor) {
            $leitor->exibirLeitor();
            echo "\n";
        }
    }
}
?>
