<?php 
//CLASSE
class Post{
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    //CONSTRUTOR

    public function __construct($qt_likes = 0){

        $this->likes = $qt_likes;

    }


    //METODOS
    public function aumentarLikes(){

        $this->likes++;

    }

}

//OBJETO
$post1 = new Post(10);

$post1->aumentarLikes();

$post2 = new Post(5);
//$post2->likes = 10;

////

echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes;

echo "<hr>";
//////////////////////////////////////////////////////////////////

class Pessoa{

    public string $nome;
    public int $idade;

  /* public function __construct(string $nome, int $idade){

    $this->nome = $nome;
    $this->idade = $idade;

    }
*/
    public function getNome(){
        return $this->nome;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setNome(string $nome){
        $this->nome = $nome;
    }

    public function setIdade(int $idade){
        $this->idade = $idade;
    }


}

$pessoa1 = new Pessoa();
$pessoa1->setNome("José");
$pessoa1->setIdade(25);


$pessoa2 = new Pessoa();
$pessoa2->setNome("Robert");
$pessoa2->setIdade(38);



echo "NOME: " . $pessoa1->getNome(). "<br> IDADE: " . $pessoa1->getIdade(). "<hr>";
echo "NOME: " . $pessoa2->getNome(). "<br> IDADE: " . $pessoa2->getIdade(). "<hr>";



/////////////////////////////////////////////////////////////////

//METODO ESTATICO

class Matematica
{
    public static function somar(int $x, int $y){ 
        return $x + $y;
    }
}

echo Matematica::somar(10, 30);


//////////////////////////////////////////////////////////////////////

//HERANÇA
/////////// FALTA TERMINAR ESSA MATERIA
class BIO extends Pessoa{
    private $cpf;
    public function getCPF(){
        return $this->cpf;
    }
}


/////////////////////////////////////////////////////////////////
echo"<br /><hr />";

//INTERFACE

interface DataBase{
    public function listarProdutos();
    public function adicionarProduto();
    public function alterarProduto();
    public function deletarProduto();
}

class MySQLDB implements DataBase{

    public function listarProdutos(){

    }

    public function adicionarProduto(){
        echo "Adicionar Produto com Mysql";

    }

    public function alterarProduto(){

    }

    public function deletarProduto(){

    }
}

//outro arquivo
class OracleDB implements Database{

    public function listarProdutos(){

    }

    public function adicionarProduto(){
        echo "Adicionar Produto com Oracle";

    }

    public function alterarProduto(){

    }

    public function deletarProduto(){

    }
}

$db= new MySQLDB();
$db->adicionarProduto();

////////////////////////////////////////////////
echo"<br /><hr />";

///////////////////////////////////////////////////

//POLIMORFISMO

interface Forma{
    public function getArea();
    public function getTipo();
}
class Quadrado implements Forma{

    private $altura;
    private $largura;

    public function __construct($l, $a){
        $this->altura = $a;
        $this->largura = $l;

    }
    public function getArea(){
        return $this->largura * $this->altura;
    }

    public function getTipo(){
        return "Quadrado";
    }
}

class Circulo{

    private $raio;

    public function __construct($r){
        $this->raio = $r;
    }

    public function getArea(){
        return pi() * ($this->raio * $this->raio);
    }

    public function getTipo(){
        return "Circulo";
    }

}



$quadrado = new Quadrado(5, 5);
$circulo = new Circulo(10);

$obj = [ 
    $quadrado,
    $circulo
];

foreach ($obj as $objeto){
    $tipo = $objeto->getTipo();
    $area = $objeto->getArea();
    echo "Area ". $tipo . " : " . $area."<br>";
}















?>