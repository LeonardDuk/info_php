<?php

/*
 * Implementar a classe estagiario
 * Implementar a classe empregadoCLT
 * Implementar a classe tercerizado 
 * Implementar a classe Folha de Pagamento
 */
interface Remuneravel {
    public function faturar();
}

class Estagiario implements Remuneravel {
    public  $salario = 1000 ;
    public function faturar() {
        $this->salario *= 2;
    }

    
}

class Empregadoclt implements  Remuneravel{
    public  $salario = 1000 ;
    public function faturar() {
        $this->salario *= 2;
    }
    
}

class Tercerizado  implements  Remuneravel{
    public  $salario = 1000 ;
    public function faturar() {
        $this->salario *= 2;
    }
}
class FolhaDePagamento {
    public Remuneravel $salario ;

    public function pagar(Remuneravel $salario){ 
        $this->salario= $salario;
        $this->salario->faturar();
      
    }
    public function __toString() {
        return "O salário é :{$this->salario->salario}<br>";
    }
}

$estagiario = new Estagiario();

$folha = new FolhaDePagamento();
$folha->pagar($estagiario);
echo "{$folha}";