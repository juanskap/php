<?php
/*
 define  ("NOMBRE_EMPRESA", "JCR");
   define  ("PI", "3.1414");
ECHO NOMBRE_EMPRESA;  
echo PI;
*/

define  ("iva", "0.15");
$precio = 100;
$total = $precio + ($precio * iva);
echo "El total con IVA es: $total";
?>