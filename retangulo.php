<?php

class Retangulo 
{
    private $ladoMaior;
    private $ladoMenor;

    public function setLadoMaior ($maior)
    {
        $this->ladoMaior = $maior;
    }

    public function setLadoMenor($menor)
    {
        $this->ladoMenor = $menor;
    }

    public function calculaArea()
    {
        return $this->ladoMaior * $this->ladoMenor;
    }

}
if(isset($_POST['calcula_area'])) {
    $retangulo = new Retangulo();
    $retangulo->setLadoMaior($_POST['largura']);
    $retangulo->setLadoMenor($_POST['altura']);
    $area = $retangulo->calculaArea();
    echo "A área é: " . $area;
}




?> 