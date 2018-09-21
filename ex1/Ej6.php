<?php
echo "6.Exten el codi per tal de, a més de la variable $i,
treballar igual amb variables de tipus: coma flotant, booleana i cadena de caracters.<br>";
$i = 12;
$tipus_de_i = gettype( $i );
  echo "La variable \$i conté el valor $i i és del tipus $tipus_de_i <br>";
$i=1.2;
$tipus_de_f = gettype( $i );
  echo "La variable \$i conté el valor $i i és del tipus $tipus_de_f <br>";
$i = true;
$tipus_de_b = gettype( $i );
  echo "La variable \$i conté el valor $i i és del tipus $tipus_de_b <br>";
$i = "Hola";
$tipus_de_s = gettype( $i );
  echo "La variable \$i conté el valor $i i és del tipus $tipus_de_s <br>";

 ?>
