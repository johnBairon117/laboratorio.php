<html>
<head>
</head>
<body>
   <center><H1>Calcular el descuento de un articulo</H1></center>

   <FORM NAME="ejercicio5.1.php" action="ejercicio5.php" METHOD='post'>

<?php
 
    $nombre=$_POST['nombreA'];
        $clave=$_POST['claveD'];
            $precio=$_POST['precioD'];
  
    echo "El nombre del articulo es: ".$nombre."<br>";
        echo "La clave de descuento es: ".$clave."<br>";
            echo "El precio original del articulo es: ".$precio."<br>";
   
        if($clave==1){
            $total=$precio-($precio*0.1);
                echo "El precio con descuento es: ".$total."<br>";}
            else{

                if($clave==2){
                    $total=$precio-($precio*0.2);
                        echo "El precio con descuento es: ".$total."<br>";}
                    else{
                        echo "Esa clave no existe";}
 }
?>
<center> <INPUT TYPE="submit" VALUE="Volver" style='width:70px; height:30px'> </center>
</body>
</html>