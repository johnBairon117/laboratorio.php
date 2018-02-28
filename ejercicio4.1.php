<html>
<head>
</head>
<body>

<center><H1>cantidad de dinero que recibira las areas del hospitas</H1></center>

<FORM NAME="ejercicio4.1.php" action="ejercicio4.php" METHOD='post'>

<?php
 
    $monto=$_POST['montoP'];
  
        echo "El monto presupuestal es: ".$monto."<br>";
   
            $ginecologia=$monto*0.4;
                $traumatologia=$monto*0.3;
                    $pediatria=$monto*0.3;

            echo "La cantidad de dinero para el area de ginecologia es: ".$ginecologia."<br>";
        echo "La cantidad de dinero para el area de traumatologia es: ".$traumatologia."<br>";
    echo "La cantidad de dinero para el area de pediatria es: ".$pediatria."<br>";
 
?>
<center> <INPUT TYPE="submit" VALUE="Volver" style='width:70px; height:30px'> </center>

</body>
</html>