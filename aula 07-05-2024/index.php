<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>atvd em sala </title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>array: definiçao explicita</h2>
    <pre>
       <?php
         $var [0]= "desenvolvimento";
         $var [1]= "web";
         $var [2]= "II";

         echo "[for]:";
         for ($a=0; $a<count ($var); $a++){
            echo "$var[$a]";
         }

         $var1 = array("henrique", "livia", "pedro", "luna", "yasmin", "luisa", "graça", "gabriela");
         for ($a=0; $a<count ($var1); $a++){
            echo "<br>$var1[$a]";
         }
       ?>
    </pre>
    <h2>array: definiçao explicita - exemplo 2</h2>
    <pre>
    <?php
        

         $var = array(1, 2, 3, 4);

         for ($a=0; $a<count ($var1); $a++){
            echo "<br>$var1[$a]";
         }
       ?>
       </pre>
         
       <pre>
          <?php

         $var = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
         
         echo count ($var);   

         for ($i=0; $i<=8;  $i++){
            echo "<br>$var[$i] ";
         }

       ?>

       </pre>

       <pre>
          <?php

         $var1 = array("henrique", "livia", "pedro", "luna", "yasmin", "luisa", "graça", "gabriela"); 

         for ($i=0; $i<(count ($var1));  $i++){
         }

       ?>

       </pre>

       <pre>
          <?php

         $var = array("pedro"=>90 , "luisa"=>7 , "yasmin"=>9 ); 

         foreach ($var as $chave => $valor){
            if ($valor>10){
            echo "<br> $chave = ";
            echo $valor;
            }
         }

       ?>

       </pre>
       

 



</body>
</html>