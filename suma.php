<html>
 <head> 
 <title> Operaciones de numeros </title>
 </head>

 <body> 
 <form method="post" action=""><br>
 ingrese el numero uno:<br>
 <input type="text" name="numero1"><br>
 ingrese el numero dos:<br>
 <input type="text" name="numero2"><br>
 <input type="submit" value="proceder"><br>
 </form> 

 </body> 

 <?php 
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];
 
  $suma = $numero1 + $numero2;
  $resta = $numero1 - $numero2;
  $multiplicacion = $numero1 * $numero2;

   echo "la suma de ".$numero1." mas ".$numero2." es igual a:" . $suma ."<br>";
   echo "  la resta de ".$numero1." menos ".$numero2." es igual a:" . $resta ."<br>";
   echo "  la multiplicacion de ".$numero1." por ".$numero2." es igual a:" . $multiplicacion ."<br>";
 ?>

 </html>
 