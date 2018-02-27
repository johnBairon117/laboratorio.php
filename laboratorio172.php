<center><H1>Calcular la nota final de la asignatura</H1></center>
<?php
 
 $parcial1=$_POST['nota1'];
 $parcial2=$_POST['nota2'];
 $parcial3=$_POST['nota3'];
 $examenFinal=$_POST['examenFinal'];
 $trabajoFinal=$_POST['trabajoFinal'];
 $promedioParciales= ($parcial1 + $parcial2 + $parcial3)/3;

 echo "La nota del parcial 1 es:".$parcial1."<br>";
  echo "La nota del parcial 2 es:".$parcial2."<br>";
  echo "La nota del parcial 3 es:".$parcial3."<br>";
 echo "la calificacion del examen final es:".$examenFinal."<br>";
 echo "la calificacion de un trabajo final es:".$trabajoFinal."<br>";

 $porcentajeParciales= $promedioParciales*0.35;
 $porcentajeExamen=$examenFinal*0.35;
 $porcentajeTrabajo=$trabajoFinal*0.30;
 $notaFinal=$porcentajeParciales+$porcentajeExamen+$porcentajeTrabajo;
 echo "Su nota final es: ".$notaFinal."<br>";
 if($notaFinal<3){  
  echo "El estudiante no aprobó";
  }
 else{
  echo "El estudiante aprobó";
  }
 
 
?>