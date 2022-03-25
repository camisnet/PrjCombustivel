<?php
 
 //$nm = $_POST['nome'];
 //$idade = $_POST['idade'];
 
 $nm = $_GET['nome'];
 $idade = $_GET['idade'];
 
 echo "<h2> Nome: ".$nm."</h2> <br>";
 echo "<h2> Você tem  ".$idade." anos <h2>";
 
 if($idade >= 18)
 {
 echo "<h2> Maior de idade </h2><br>";
 }
 else
 {
 echo "<h2> Menor de idade </h2> <br>";
 }
 
?>