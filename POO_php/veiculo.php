<?php

interface IVeiculo{
    public function dirigir($chave);
}

abstract class Veiculo implements IVeiculo {
    public function dirigir($chave){
        /*
        colocar conto de segurança 
        colocar em ponto morto  
        ligar o carro
        engatar a marcha 
        acelerar
        soltar a embreagem  
        */
        echo "estou dirigindo... {$chave}<br>";
    }
}

class carro extends Veiculo {
    public$chave = "cahve_presencial";

    public function andar(){
        $this->dirigir($this->chave);
        echo"estou andando...<br>";
    }
}

class trator extends Veiculo{
    public $chave = "chave_trator";

    public function arrar(){
        $this->dirigir($this->chave);
    }
}

class carreta extends Veiculo {
    public $chave = "chave_canivete";

    public function viajar(){
        $this->verificarOleoMotor();
        $this->dirigir($this->chave);
    }

    public function verificarOleoMotor(){
    }

}

$carro = new carro();
$carro->andar();
