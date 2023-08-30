<?php 
echo"<pre>";
print_r($_FILES);

//$file = $_FILES['arquivo']['name'];

if(in_array($_FILES['arquivo']['type'], array('image/jpeg', 'image/jpg', 'image/png'))) {

$file = md5(time().rand(0, 1000)).'.jpg';

move_uploaded_file($_FILES['arquivo']['tmp_name'],'uploadArquivos/'.$file);

}else{
    echo "ARQUIVO NÃO PERMITIDO";
}


?>