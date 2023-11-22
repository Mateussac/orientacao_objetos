<?php
class sequencia{
    private $inicio;
    private $fim;
    public function setInicio($a){
        $this -> inicio = $a;
    }
    public function setFim($b){
        $this -> fim = $b;
    }
    public function exibirTodosNumeros(){
        $i = $this -> inicio;
        while($i <= $this -> fim){
            echo $i++;
            echo "<br>";
        }
    }

    public function exibirPares(){
        $i = $this -> inicio;
        while($i <= $this -> fim){
            if ($i%2 == 0) {
                echo $i++;
                echo "<br>";
            }else{
                $i++;
            }
        }

    }
    public function exibirImpares(){
        $i = $this -> inicio;
        while($i <= $this -> fim){
            if($i % 2 != 0){
                echo $i++;
                echo "<br>";
            }else{
                $i++;
            }
        }
    }
}
$a = $_GET["p_numero"];
$b = $_GET["u_numero"];
$c = $_GET["mostrar"];
    $seq1 = new sequencia();
    $seq1 -> setInicio($a);
    $seq1 -> setFim($b);
    if($c == "todos"){
        echo $seq1 -> exibirTodosNumeros();
    } elseif($c == "exb_p"){
        echo $seq1 -> exibirPares();
    } elseif($c == "exb_i"){
        echo $seq1 -> exibirImpares();
    }

?>