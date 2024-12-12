<?php
   include "conexao.php";

 if($_SERVER["REQUEST_METHOD"] == "POST"){

    $primeira_nota = $_POST["nota1"];
    $segunda_nota = $_POST["nota2"];
    $terceira_nota = $_POST["nota3"];
   
    
 $enviarDados = "INSERT INTO nota( primeira_nota, segunda_nota, terceira_nota) 
 VALUES ('$primeira_nota', '$segunda_nota', '$terceira_nota')";
 $connection->query($enviarDados);
  
  }
 
 
 $url = "index.php";
 
 header('Location: '.$url);
 
 $connection->close();
 

?>