<?php

echo "<h2>Ejercicio 1</h2> <br>";

for ($i=1; $i < 101 ; $i++) {
  print "$i";
}

echo "<br> <h2>Ejercicio 2</h2> <br> ";

$i = 100;

while ($i < 101 && $i > 0) {
  print "$i";
  $i--;
}
echo "<br> <h2>Ejercicio 3</h2> <br>";

for ($i=2; $i < 101; $i= $i + 2) {
  print "$i";
}

echo "<br> <h2>Ejercicio 4</h2> <br>";

for ($i=1; $i < 101; $i= $i + 2) {
  print "$i";
}

echo "<br> <h2>Ejercicio 5</h2> <br>";

$suma = 0;
for ($i=1; $i <=20 ; $i++) {
    $suma += $i;
}
print "$suma";

echo "<br> <h2>Ejercicio 5</h2> <br>";

$suma = 0;
for ($i=2; $i <=20 ; $i= $i + 2) {
  $suma = $suma + $i;
  
}
print $suma;


 ?>
