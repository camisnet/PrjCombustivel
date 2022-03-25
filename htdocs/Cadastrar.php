<?php
 
 //$nm = $_POST['nome'];
 //$idade = $_POST['idade'];
 
 $nm = $_GET['nome'];
 $idade = $_GET['idade'];
 
echo  <center>"<h2>Nome: ".$nm."<br>" <center>;
 echo  <center> "Você nasceu em ".(2022 - $idade) <center> ;    
?>

<!doctype html>
<html lang="pt-br">
 <head>
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <script src="js/bootstrap.bundle.min.js" ></script>

<style>

.buttonClass {
      font-size: 15px;
      font-family: Arial;
      width: 140px;
      height: 50px;
      border-width: 0px;
      color: rgb(41, 105, 179);
      border-color: rgb(16, 106, 141);
      font-weight: bold;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 6px;
      border-bottom-right-radius: 6px;
      box-shadow: inset 0px 0px 0px 0px #40abf3;
      text-shadow: inset 0px 0px 0px #ffffff;
      background: linear-gradient(rgb(240, 202, 161), rgba(243, 207, 173, 1));
    }

    .buttonClass:hover {
      background: linear-gradient(rgb(243, 188, 136), rgb(248, 203, 156));
    }


            
</style>
<br>
 </head>
 <body bgcolor="#20B2AA">
 <form action="Cadastrar.html" method="GET">
 <center><input type="submit" class="buttonClass" value="Voltar"></center>
 </form>
 
 </body>
</html>