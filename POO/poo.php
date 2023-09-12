<?php 
//CLASSE
class Post{
    public int $likes = 0;
    public array $comments = [];
    public string $author;

    //METODOS
    public function aumentarLikes(){

        $this->likes++;

    }

}

//OBJETO
$post1 = new Post();
$post1->likes = 3;
$post1->aumentarLikes();

$post2 = new Post();
$post2->likes = 10;

////

echo "POST 1: ".$post1->likes."<br>";
echo "POST 2: ".$post2->likes;
















?>