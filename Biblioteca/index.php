<?php
// Inclui as classes
require_once 'Livro.php';
require_once 'Leitor.php';
require_once 'Biblioteca.php';

// Criando livros
$livro1 = new Livro();
$livro1->setTitulo("1984");
$livro1->setAutor("George Orwell");
$livro1->setAnoPublicacao(1949);

$livro2 = new Livro();
$livro2->setTitulo("Dom Casmurro");
$livro2->setAutor("Machado de Assis");
$livro2->setAnoPublicacao(1899);

// Criando leitores
$leitor1 = new Leitor();
$leitor1->setNome("Maria");
$leitor1->setEmail("maria@email.com");
$leitor1->setTelefone("99999-1111 <br>");

$leitor2 = new Leitor();
$leitor2->setNome("João");
$leitor2->setEmail("joao@email.com");
$leitor2->setTelefone("88888-2222");

// Criando biblioteca
$biblioteca = new Biblioteca("Biblioteca Comunitária");
$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLeitor($leitor1);
$biblioteca->adicionarLeitor($leitor2);

// Listar dados
echo "<h2>Livros</h2>";
$biblioteca->listarLivros();


echo "<h2>Leitores</h2>";
$biblioteca->listarLeitores();


echo "<h2>Empréstimo e Devolução</h2>";
echo $livro1->getTitulo() . ": " . $livro1->estaDisponivel() . "<br>";
$livro1->emprestar($leitor1->getNome());
echo "<br>Quem pegou o livro: " . $livro1->quemPegou() . "<br><br>";

$livro1->devolver();
echo "<br>Livro devolvido.<br>";
echo "Quem está com o livro agora? " . $livro1->quemPegou() . "<br>";
?>
