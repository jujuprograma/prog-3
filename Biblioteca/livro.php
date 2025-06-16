<?php
class Livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel = true;

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAnoPublicacao($ano) {
        $this->anoPublicacao = $ano;
    }

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }

    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }

    public function getDisponivel() {
        return $this->disponivel;
    }

    public function exibirInformacoes() {
        echo "<br><br>Título: " . $this->titulo . "\n";
        echo "<br>Autor: " . $this->autor . "\n";
        echo "Ano: " . $this->anoPublicacao . "\n";
        echo "<br>Disponível: " . ($this->disponivel ? "Sim" : "Não") . "\n";
    }

    // Exercício 2
    protected $leitorAtual = null; // do exercício 4

    public function emprestar($nomeLeitor = null) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $nomeLeitor;
            echo "Livro emprestado com sucesso.\n";
        } else {
            echo "Livro indisponível.\n";
        }
    }

    public function devolver() {
        $this->disponivel = true;
        $this->leitorAtual = null;
        echo "Livro devolvido com sucesso.\n";
    }

    public function estaDisponivel() {
        return $this->disponivel ? "O livro está disponível." : "O livro está emprestado.";
    }

    public function quemPegou() {
        return $this->leitorAtual ?? "Ninguém pegou o livro.";
    }
}
?>
