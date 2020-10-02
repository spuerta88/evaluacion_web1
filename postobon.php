<html>
 <head> 
 <title> Tienda Spring Step  </title>
 </head>

 <body> 
 <h1> Postobon </h1>
 <form method="post" action=""><br>
 Ingrese el numero de horas trabajadas:<br>
 <input type="text" name="numero1"><br>
 <input type="submit" value="proceder"><br>
 </form> 
  </body> 

  <?php 
  $numero1 = $_POST['numero1'];
 if ($numero1 < 40 ) {
    $pagar= $numero1 * 20000;
    echo "Su pago es de:.$pagar."; 
   } elseif ($numero1>40) {
    $pagar= 40 * 20000 + ($numero1 - 40) * 25000;
    echo "Su pago es de:.$pagar.";
   }

   
  ?>