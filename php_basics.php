<?php

echo " <h1>Exercici 1 Tema PHP_Basics.</h1>";

$Integer = 1;

$Double = 2.5;

$String = "Patata";

$Boolean = true;

var_dump( $Integer, $Double, $String, $Boolean );

echo " <h1>Exercici 2 part 1 Tema PHP_Basics. </h1>";

$frase = "Hello World!";
$frase_tornada = strtoupper($frase);
echo "La frase tornada serà ".$frase_tornada;

echo "<h1>Exercici 2 part 2 Tema PHP_Basics. </h1>";

$frase = "Hello World!";

// Ens tornara el valor 12

echo strlen ( $frase );

echo " <h1>Exercici 2 part 3 Tema PHP_Basics. </h1>";

$frase = " Hello World! ";

// Ens tornara la frase invertida

echo strrev(" Hello world! ");

echo "<h1> Exercici 2 part 4 Tema PHP_Basics. </h1> ";

$frase = " Hello World! ";

$frases = " Aquest és el curs de PHP.";

$text_complert = $frase . $frases;

echo "El tex complert és ".$text_complert;

echo "<h1> Exercici 3 Tema PHP_Basics.</h1> ";

define ( "NOM", "Gabriel Farrus Grau.");

print "<h1>Nom: " . NOM . "</h1>\n";

echo " <h1>Exercici 4 Tema PHP_Basics. </h1> ";

$x = 5;
$y = 10;
$n = 2.554;
$m = 12.567;

var_dump ($x, $y, $n, $m);

$suma = $x + $y;

$resta = $x - $y;

$producte = $x * $y;

$modul =$x % $y;

print "<br> La suma dels dos números és: ".$suma;
print "<br> La resta dels dos números és: ".$resta;
print "<br> El producte dels dos números és: ".$producte;
print "<br> El módul dels dos números és: ".$modul;


$suma1 = $n + $m;

$resta1 = $n - $m;

$producte1 = $n* $m;

$modul1 =$n % $m;

print "<br> La suma dels dos números és: ".$suma1;
print "<br> La resta dels dos números és: ".$resta1;
print "<br> El multiplicació dels dos números és: ".$producte1;
print "<br> El módul dels dos números és: ".$modul1;

$doble = $x * 2;
$doble1 = $y * 2;
$doble2 = $n * 2;
$doble3 = $m * 2;

print "<br> El doble del primer número és: ".$doble;
print "<br> El doble del segon número és: ".$doble1;
print "<br> El doble del tercer número és: ".$doble2;
print "<br> El doble del quart número és: ".$doble3;

$suma2 = $x + $y + $n+ $m;

print "<br> La suma de tots els números és: ".$suma2;

$producte2 = $x * $y * $n * $m;

print "<br> La multiplicació de tots els números és: ".$producte2;

echo " <h1>Exercici 5 Tema PHP_Basics. </h1>";

$nombres1 = array (4, 8, 7, 9, 25);
$nombres2 = array (1, 3, 22);

var_export( $nombres1);

var_export ($nombres2);

array_push ($nombres2, 5);

$array_total = array_merge($nombres1, $nombres2);

var_export($array_total);

echo '<br>'."L'array complert és: \n".'<br />';

foreach($array_total as $array_total){
    echo $array_total. "\n".'<br />';
}

?>