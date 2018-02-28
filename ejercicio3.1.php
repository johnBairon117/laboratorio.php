<html>
<head>
</head>
<body>


<center><H1>Calcular el IMC</H1></center>

<FORM NAME="ejercicio3.1.php" action="ejercicio3.php" METHOD='post'>
<?php
 
  $nombre=$_POST['nombreP'];
    $peso=$_POST['pesokg'];
      $estatura=$_POST['estaturaM'];
 
      echo "El nombre del paciente es: ".$nombre."<br>";
    echo "El peso del paciente en kilogramos es: ".$peso."<br>";
  echo "La estatura del paciente en metros es:".$estatura."<br>";
 
    $IMC=$peso/($estatura*$estatura);
  echo "El indice de masa corporal del paciente es: ".$IMC."<br>";

      if($IMC<18.5){
        echo "El paciente esta por debajo del peso equibalente: estas raquitico pana";}
            else{

                if($IMC<24.9){
                  echo "El paciente esta saludable cual es tu secreto";}
                      else{

                          if($IMC<29.9){
                            echo "El paciente esta con Sobrepeso te ves gorda jajaja";}
                                else{

                                    if($IMC<39.9){
                                      echo "El paciente es Obeso estas como ñoño";}
                                          else{
                                    echo "El paciente tiene Obesidad morbida te vas a morir y probocaras un terremoto";
    }
   }
  }
 }
 
?>
<center> <INPUT TYPE="submit" VALUE="Volver" style='width:70px; height:30px'> </center>

</body>
</html>