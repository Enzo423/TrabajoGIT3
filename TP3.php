<?php
   $altura = $_GET['altura'];
   $diametro = $_GET['diametro'];
   $radio = $diametro / 2;
   $alturadm = $altura * 10; // Esta variable solo se utiliza para sacar el volumen  
   $radiodm = $radio * 10; // Esta variable solo se utiliza para sacar el volumen
   $volumen = 3.14159265359 * ($radiodm * $radiodm) * $alturadm;
   $perimetro = 2 * 3.14159265359 * $radio;
   echo "La altura del cilindro es de " . $altura . " metros. ";
   echo "El diametro del cilindro es de " . $diametro . " metros. ";
   echo "El radio del cilindro es de " . $radio . " metros. ";
   echo "El volumen del cilindro es de " . round($volumen, 2) . " litros.";
   echo "El perimetro del cilindro es de" . $perimetro . "metros";
?>