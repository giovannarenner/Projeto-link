<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>link</title>
</head>
<body>
    <div class="container">
        <h1 >Clique e o link  rb.arblu.www será invertido</h1>
   
<form  method="POST">
        <button class="mostrar" name="mostrar">Mostrar</button> <br>
        
        <?php
      if(isset($_POST['mostrar'])){
      $link = "rb.arblu.www";
      $inverso =  strrev($link);
      
        echo "<a style='margin-top: 30px; font-size: 35px; color: brown' href='https://www.ulbra.br/'>
         $inverso
     </a>";
      }
            
         ?> 
        </form>
        </div>
</body>
</html>