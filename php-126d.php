<?php

class Retangulo {
    // Atributos
    private $base;
    private $altura;

    // Método para definir a base
    public function setBase($base) {
        $this->base = $base;
    }

    // Método para definir a altura
    public function setAltura($altura) {
        $this->altura = $altura;
    }

    // Método para calcular a área
    public function calculaArea() {
        return $this->base * $this->altura;
    }
}

// Testando a classe Retangulo
$meuRetangulo = new Retangulo();

// Definindo a base e altura
$meuRetangulo->setBase(5.0);
$meuRetangulo->setAltura(3.0);

// Calculando e exibindo a área
$area = $meuRetangulo->calculaArea();
echo "A área do retângulo é: " . $area;

// Testando novamente com novos valores
$meuRetangulo->setBase(7.0);
$meuRetangulo->setAltura(4.0);

// Calculando e exibindo a nova área
$novaArea = $meuRetangulo->calculaArea();
echo "<br>A nova área do retângulo é: " . $novaArea;

?>
