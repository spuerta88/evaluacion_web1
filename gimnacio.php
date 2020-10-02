<html>
 <head> 
 <title> Operaciones de numeros </title>
 </head>

 <body> 
 <form method="post" action=""><br>
 ingrese su altura:<br>
 <input type="text" name="numero1"><br>
 ingrese su peso:<br>
 <input type="text" name="numero2"><br>
 <input type="submit" value="proceder"><br>
 </form> 

 </body> 

 <?php 
 $numero1 = $_POST['numero1'];
 $numero2 = $_POST['numero2'];
 
  $IMC = $numero2 / ($numero1 * $numero1);

  echo "Su masa corporal es de:" . $IMC;

  if ($IMC == 18.5) {
  echo "Peso insuficiente";
  }
  elseif (18.5<$IMC && $IMC<24.9 ) {
  echo "Normopeso";
  }
  elseif (25<$IMC && $IMC<26.9 ) {
    echo "Sobre peso grado I";
    }
 elseif (27<$IMC && $IMC<29.9 ) {
        echo "Sobre peso grado II (preobesidad)";
        }
        elseif (30<$IMC && $IMC<34.9 ) {
            echo "Obesidad de tipo I";
            }
            elseif (35<$IMC && $IMC<39.9 ) {
                echo "Obesidad tipo II";
                }
                elseif (40<$IMC && $IMC<49.9 ) {
                    echo "Obesidad tipo III (mórbida)";
                    }
                    elseif (50<$IMC ) {
                        echo "Obesidad tipo IV (extrema)";
                        }
 ?>