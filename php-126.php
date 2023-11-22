<?php

class Quadrado {
    private $lado;

    public function setLado($lado) {
        $this->lado = $lado;
    }

    public function calculaArea() {
        return $this->lado * $this->lado;
    }
}

// Crie uma instância da classe Quadrado
$quadrado = new Quadrado();

// Defina o lado do quadrado
$quadrado->setLado(5.0);

// Calcule e imprima a área do quadrado
echo 'Área do quadrado: ' . $quadrado->calculaArea() . '<br>';

// Defina um novo lado
$quadrado->setLado(7.5);

// Calcule e imprima a área do quadrado com o novo lado
echo 'Área do quadrado com novo lado: ' . $quadrado->calculaArea() . '<br>';

?>
