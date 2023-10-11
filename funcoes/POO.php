<?php
$cor = "branco";
$altura = 1.75 ;   
$peso = 62 ; 


class Pessoa{
    public $cor;
    public $altura;
    public $peso;

    public function pessoa($cor , $altura , $peso) {
        $this->cor = $cor;
        $this->altura = $altura;
        $this->peso = $peso;

    }

    public function andar(){
        echo "a pessoa está andando.";
    }

    public function parar(){
        echo "A pessoa está parada";
    } 

    public function caracteristicas(){
        echo "cor " . $this->cor . "<br>";
        echo "altura " . $this->altura . "<br>";
        echo "peso " . $this->peso . "<br> ";
    }
}
    
$pessoa = new Pessoa();
$pessoa->pessoa($cor , $altura , $peso);
$pessoa->andar();
echo "<br>";
$pessoa->parar();
echo "<br>";
$pessoa->caracteristicas();