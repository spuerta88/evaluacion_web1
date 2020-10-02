<html>
 <head> 
 <title> Tienda Spring Step  </title>
 </head>

 <body> 
 <h1> Tienda Spring Step </h1>
 <form method="post" action=""><br>
 ingrese el numero de pares de zapatos:<br>
 <input type="text" name="numero1"><br>
 ingrese el costo total de los zapatos:<br>
 <input type="text" name="costo"><br>
 <input type="submit" value="proceder"><br>
 </form> 
  </body> 
 

  <?php
  $numero1 = $_POST['numero1'];
 $costo = $_POST['costo'];
if ($numero1 == 3 ) {
 echo "Su descuento es del 10%";
 $pagar= $costo - ($costo * 0.1);
 echo "Su total a pagar es de: .$costo. menos el descuento es de:.$pagar."; 
}
 elseif (3<$numero1 && $numero1<8 ) {
    echo "Su descuento es del 20%";
     $pagar= $costo - ($costo * 0.2);
     echo "Su total a pagar es de: .$costo. menos el descuento es de:.$pagar."; 
     }
     elseif (8<$numero1 ) {
        echo "Su descuento es del 50%"; 
         $pagar= $costo - ($costo * 0.5);
 echo "Su total a pagar es de:.$costo. menos el descuento es de:.$pagar."; 
     } else {
     echo "Su total a pagar es de: .$costo. sin descuento alguno"; 
     }
?>



  

