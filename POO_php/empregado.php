<?php

/*
 * Implementar a classe estagiario
 * Implementar a classe empregadoCLT
 * Implementar a classe tercerizado 
 * Implementar a classe Folha de Pagamento
 */
interface IRemuneravel {
    public function faturar( IRemuneravel $dinheiro);
}

class Estagiario{
    public IRemuneravel  $dinheiro;

    public function faturar(IRemuneravel $dinheiro) {
        $this->remuneravel= $dinheiro;
    }

    public function __toString() {
        echo $this->remuneravel;
    }
}

class Empregadoclt implements  IRemuneravel{
    public $dinheiro;
    public $faturamento;

    public function faturar(IRemuneravel $dinheiro) {
        $this->dinheiro = $dinheiro;
        echo "estou recebendo o ... {$this->dinheiro}<br>";
    }
    
    public function setFaturamento(IRemuneravel $faturamento) {
        $this->faturamento = $faturamento;
        echo "o faturamento é... {$this->faturamento}<br>";
    }
    
}

class Tercerizado  implements  IRemuneravel{
    public $dinheiro ;

    public function faturar(IRemuneravel $dinheiro) {
        $this->dinheiro = $dinheiro;
        echo "estou recebendo o ... {$this->dinheiro}<br>";
    }
}

class folhadepagamento implements  IRemuneravel{
    public $dinheiro ;

    public function faturar(IRemuneravel $dinheiro) {
        $this->dinheiro = $dinheiro;
        $remuneracao = $this->verificarAremuneracao();
        echo "estou recebendo o ... {$this->dinheiro}<br>" . $remuneracao;
    }

    public function verificarAremuneracao() {
        return "o recebimento das verbas  está ok !<br>";
    }

}




$dinheiro  = "17000";

$estagiario = new Estagiario();
$estagiario->faturar($dinheiro);
$estagiario-setFaturamento("17000");

$empregoclt = new Empregoclt();
$empregoclt->faturar("17000");


$tecerizado = new Tercerizado();
$tecerizado->faturar($dinheiro);

$folhadepagamento = new Folhadepagemento();
$tecerizado->faturar($dinheiro);

 $remuneravel= new Remuneravel();
echo $remuneravel->faturar($tecerizado);
