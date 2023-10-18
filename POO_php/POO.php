 <?php
$cor = "branco";
$altura = 1.75 ;   
$peso = 62 ; 


// class Pessoa{
//     public $cor;
//     public $altura;
//     public $peso;

//     public function __construct($cor , $altura , $peso) {
//         $this->cor = $cor;
//         $this->altura = $altura;
//         $this->peso = $peso;

//     }

//     public function andar(){
//         echo "a pessoa está andando.";
//     }

//     public function parar(){
//         echo "A pessoa está parada";
//     } 

//     public function caracteristicas(){
//         echo "cor " . $this->cor . "<br>";
//         echo "altura " . $this->altura . "<br>";
//         echo "peso " . $this->peso . "<br> ";
//     }
// }
    
// $pessoa = new Pessoa();
// $pessoa->pessoa($cor , $altura , $peso);
// $pessoa->andar();
// echo "<br>";
// $pessoa->parar();
// echo "<br>";
// $pessoa->caracteristicas(); 

class Pessoa {
    public $nome;
    public $idade;
    public $sexo;
    public $nomeMae;
    public $nomePai;
    public $estadoCivil;
    public $profissao;
    public $escolaridade;
    public $telefone;

    public function __construct($nome = "Beto", $idade, $sexo, $nomeMae, $nomePai, $estadoCivil, $profissao, $escolaridade, $telefone ="") {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->nomeMae = $nomeMae;
        $this->nomePai = $nomePai;
        $this->estadoCivil = $estadoCivil;
        $this->profissao = $profissao;
        $this->escolaridade = $escolaridade;
        $this->telefone = $telefone;
    }

    public function dormir() {}
    public function acordar() {}
    public function caminhar() {}
    public function falar() {}

    public function __toString() {
        return $this;
    }

}

$nome = "Joao  do Caminhao";
$idade = "22";
$sexo = "M";
$nomeMae = "Joana do Kombi";
$nomePai = "José do Fusca";
$estadoCivil = "Solteiro";
$profissao = "Programador";
$escolaridade = "Superior Completo";
$telefone = "54912345678";

$pessoa = new Pessoa($nome, $idade, $sexo, $nomeMae, $nomePai, $estadoCivil, $profissao, $escolaridade, $telefone);
echo $pessoa; // faz carteira