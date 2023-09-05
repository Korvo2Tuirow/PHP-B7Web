<?php 
echo"<pre>";
print_r($_FILES);


$nomedoarquivo = $_FILES['arquivo']['name'];
$caminho = $_FILES['arquivo']['tmp_name'];
$pasta = "uploadArquivos/".$nomedoarquivo;

move_uploaded_file($caminho, $pasta);











/*
//$file = $_FILES['arquivo']['name'];



//if(in_array($_FILES['arquivo']['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {

   
       
        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
        $id = uniqid();
        $file = $id.".".$extensao;
        $pasta = "uploadArquivos/";
        
        
        echo $extensao;
    




//}else{
   
    
//}



*/

?>