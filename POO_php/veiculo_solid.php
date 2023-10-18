<?php


interface IVeiculo{
    public function dirigir($chave);
}

class Veiculo  {
    public $veiculo = null;

    public function locomover(IVeiculo $veiculo){
      $this->veiculo = $veiculo;
    }

    public function __toString(){
        echo $this->veiculo->dirigir();
    }
}

class carro implements IVeiculo {
    public $chave = "cahve_presencial";

    public function dirigir($chave){
        $this->chave = $chave;
        echo"estou andando...{$this->$chave}<br>";
    }
}

class trator extends Veiculo{
    public $chave = "chave_trator";

    public function dirigir($chave){
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
