<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crud";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn){
echo 'Banco de dados conectado com sucesso!';

}else{
    echo 'Not Connected';
}


?>