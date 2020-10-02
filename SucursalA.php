<html>
 <head> 
 <title> Sucursal A </title>
 </head>

 <body> 
 <h1> Sucursal A </h1>
 <form method="post" action=""><br>
 1.Ingrese su nombre:<br>
 <input type="text" name="nom1"><br>
 1.Ingrese su telefono:<br>
 <input type="text" name="tel1"><br>
 1.Ingrese su direccion:<br>
 <input type="text" name="dir1"><br>
 1.Ingrese su salario:<br><br>
 <input type="text" name="sal1"><br><br>
 2.Ingrese su nombre:<br>
 <input type="text" name="nom2"><br>
 2.Ingrese su telefono:<br>
 <input type="text" name="tel2"><br>
 2.Ingrese su direccion:<br>
 <input type="text" name="dir2"><br>
 2.Ingrese su salario:<br><br>
 <input type="text" name="sal2"><br><br>
 3.Ingrese su nombre:<br>
 <input type="text" name="nom3"><br>
 3.Ingrese su telefono:<br>
 <input type="text" name="tel3"><br>
 3.Ingrese su direccion:<br>
 <input type="text" name="dir3"><br>
 3.Ingrese su salario:<br><br>
 <input type="text" name="sal3"><br><br>
 4.Ingrese su nombre:<br>
 <input type="text" name="nom4"><br>
 4.Ingrese su telefono:<br>
 <input type="text" name="tel4"><br>
 4.Ingrese su direccion:<br>
 <input type="text" name="dir4"><br>
 4.Ingrese su salario:<br><br>
 <input type="text" name="sal4"><br><br>
 5.Ingrese su nombre:<br>
 <input type="text" name="nom5"><br>
 5.Ingrese su telefono:<br>
 <input type="text" name="tel5"><br>
 5.Ingrese su direccion:<br>
 <input type="text" name="dir5"><br>
 5.Ingrese su salario:<br><br>
 <input type="text" name="sal5"><br><br>
 <input type="submit" value="proceder"><br>
 </form> 

 </body> 

 <?php 
 $nom1 = $_POST['nom1'];
 $tel1 = $_POST['tel1'];
 $dir1 = $_POST['dir1'];
 $sal1 =$_POST['sal1'];
 $nom2 = $_POST['nom2'];
 $tel2 = $_POST['tel2'];
 $dir2 = $_POST['dir2'];
 $sal2 =$_POST['sal2'];
 $nom3 = $_POST['nom3'];
 $tel3 = $_POST['tel3'];
 $dir3 = $_POST['dir3'];
 $sal3 =$_POST['sal3'];
 $nom4 = $_POST['nom4'];
 $tel4 = $_POST['tel4'];
 $dir4 = $_POST['dir4'];
 $sal4 =$_POST['sal4'];
 $nom5 = $_POST['nom5'];
 $tel5 = $_POST['tel5'];
 $dir5 = $_POST['dir5'];
 $sal5 =$_POST['sal5'];
 $sumatoriaSalarios= $sal1+$sal2+$sal3+$sal4+$sal5;
 $sucursalB= 40000000;
 $sucursalC= 32000000;
 echo "Usuarios de la sucursal A:";
 echo "El primer empleado se llama:.$nom1. .<br>. Su telefono es:.$tel1. .<br> Su direccion es:.$dir1. .<br>. Y su salario es de:.$sal1. .<br><br>.";
 echo "El segundo empleado se llama:.$nom2. .<br>. Su telefono es:.$tel2. .<br> Su direccion es:.$dir2. .<br>. Y su salario es de:.$sal2. .<br><br>.";
 echo "El tercer empleado se llama:.$nom3. .<br>. Su telefono es:.$tel3. .<br> Su direccion es:.$dir3. .<br>. Y su salario es de:.$sal3. .<br><br>.";
 echo "El cuarto empleado se llama:.$nom4. .<br>. Su telefono es:.$tel4. .<br> Su direccion es:.$dir4. .<br>. Y su salario es de:.$sal4. .<br><br>.";
 echo "El quinto empleado se llama:.$nom5. .<br>. Su telefono es:.$tel5. .<br> Su direccion es:.$dir5. .<br>. Y su salario es de:.$sal5. .<br><br>."; 
 echo "El total de los salarios es:.$sumatoriaSalarios.";  
 if ($sucursalB<$sumatoriaSalarios && $sucursalC<$sumatoriaSalarios ) {
    echo "La Sucursal A tiene mayor paga que las demas sucursales.";
     }
     elseif ($sucursalC<$sucursalB && $sumatoriaSalarios<$sucursalB ) {
        echo "La Sucursal B tiene mayor paga que las demas sucursales.";
         } elseif ($sucursalB<$sucursalC && $sumatoriaSalarios<$sucursalC ) {
            echo "La Sucursal C tiene mayor paga que las demas sucursales.";
             }
 ?>