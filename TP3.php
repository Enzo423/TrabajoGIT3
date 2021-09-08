<?php
   $altura = $_GET['altura'];
   $diametro = $_GET['diametro'];
   $radio = $diametro / 2;
   $alturadm = $altura * 10; // Esta variable solo se utiliza para sacar el volumen  
   $radiodm = $radio * 10; // Esta variable solo se utiliza para sacar el volumen
   $volumen = 3.14159265359 * ($radiodm * $radiodm) * $alturadm;
?>