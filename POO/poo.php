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





?>