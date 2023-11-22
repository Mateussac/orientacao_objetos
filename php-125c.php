<?php

class Pessoa {
    // Atributos
    private $nome;
    private $cidade;

    // Método para obter o nome
    public function getNome() {
        return $this->nome;
    }

    // Método para definir o nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    // Método para obter a cidade
    public function getCidade() {
        return $this->cidade;
    }

    // Método para definir a cidade
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
}

// Testando a classe Pessoa
$minhaPessoa = new Pessoa();

// Definindo o nome e a cidade
$minhaPessoa->setNome('João');
$minhaPessoa->setCidade('São Paulo');

// Obtendo e exibindo o nome e a cidade
echo 'Nome: ' . $minhaPessoa->getNome() . '<br>';
echo 'Cidade: ' . $minhaPessoa->getCidade() . '<br>';

// Definindo novos valores
$minhaPessoa->setNome('Maria');
$minhaPessoa->setCidade('Rio de Janeiro');

// Obtendo e exibindo os novos valores
echo 'Novo Nome: ' . $minhaPessoa->getNome() . '<br>';
echo 'Nova Cidade: ' . $minhaPessoa->getCidade() . '<br>';

?>
