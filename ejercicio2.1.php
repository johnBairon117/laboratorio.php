<center><H1>Calcular el salario de un vendedor</H1></center>
<?php
 

    $nombre=$_POST['nombre'];
        $cantidadA=$_POST['cantidadA'];
            $preciototalA=$_POST['preciototalA'];
 

            echo "El nombre del vendedor es: ".$nombre."<br>";
        echo "La cantidad de automoviles vendidos es: ".$cantidadA."<br>";
    echo "El precio total de automoviles vendidos es:".$preciototalA."<br>";
 

        $salarioBasico=450000;
            $comision=$cantidadA*50000;
                $porcentajeVenta=$preciototalA*0.05;
                    $salario=$salarioBasico+$comision+$porcentajeVenta;


    echo "El salario del vendedor es: ".$salario."<br>";
?>