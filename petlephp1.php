
<!DOCTYPE html>
<html lang = "pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP</title>
</head>
<body>

<h1>Zadania PHP</h1>

<?php

echo "<h3>1. Liczby od 1 do 10</h3>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}


echo "<h3>2. Liczby od 10 do 1</h3>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . " ";
}


echo "<h3>3. Suma liczb od 1 do 10</h3>";

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $suma = $suma + $i;
}

echo "Suma wynosi: " . $suma;


echo "<h3>4. Liczby parzyste</h3>";

for ($i = 2; $i <= 20; $i = $i + 2) {
    echo $i . " ";
}


echo "<h3>5. Oszczedzanie</h3>";

$X = 12;
$Y = 100;
$kwota = 0;

for ($i = 1; $i <= $X; $i++) {
    $kwota = $kwota + $Y;
    $kwota = $kwota * 1.08;
}

echo "Po " . $X . " miesiacach pracownik uzbiera: ";
echo round($kwota, 2) . " zl";


echo "<h3>6. Suma ciagu arytmetycznego</h3>";

$suma = 0;
$liczba = 5;

for ($i = 1; $i <= 100; $i++) {
    $suma = $suma + $liczba;
    $liczba = $liczba + 10;
}

echo "Suma ciagu wynosi: " . $suma;


echo "<h3>7. Liczba cegiel w piramidzie</h3>";

$suma = 0;

for ($i = 10; $i >= 1; $i--) {
    $suma = $suma + ($i * $i);
}

echo "Liczba cegiel wynosi: " . $suma;


echo "<h3>8. Liczba cegiel w scianie</h3>";

$X = 20;
$Y = 5;
$Z = 2;

$suma = 0;
$dlugosc = $X;

for ($i = 1; $i <= $Y; $i++) {
    $suma = $suma + $dlugosc;
    $dlugosc = $dlugosc - $Z;
}

echo "Liczba cegiel w scianie: " . $suma;


echo "<h3>9. Waga sciany</h3>";

$K = 3.5;

$waga = $suma * $K;

echo "Waga sciany wynosi: " . $waga . " kg";


echo "<h3>10. Kalkulator</h3>";

$a = 20;
$b = 5;
$znak = "+";

if ($znak == "+") {
    echo $a + $b;
}
elseif ($znak == "-") {
    echo $a - $b;
}
elseif ($znak == "*") {
    echo $a * $b;
}
elseif ($znak == "/") {
    if ($b != 0) {
        echo $a / $b;
    } else {
        echo "Nie mozna dzielic przez zero";
    }
}
else {
    echo "Nieznane dzialanie";
}


echo "<h3>11. Ciag arytmetyczny</h3>";

$N = 10;
$X = 2;
$Y = 3;

for ($i = 1; $i <= $N; $i++) {
    echo $X . " ";
    $X = $X + $Y;
}


echo "<h3>12. Dodawanie liczb</h3>";

$a = 5;
$b = 3;

while ($a + $b != 0) {
    echo "Suma liczb " . $a . " i " . $b . " wynosi: ";
    echo $a + $b . "<br>";


    $a = 2;
    $b = -2;
}

echo "Suma wynosi 0 - koniec";


echo "<h3>13. Silnia</h3>";

$n = 5;
$silnia = 1;

for ($i = 1; $i <= $n; $i++) {
    $silnia = $silnia * $i;
}

echo "Silnia liczby " . $n . " wynosi: " . $silnia;


echo "<h3>14. Ciag kwadratow</h3>";

$n = 4;
$liczba = 2;

for ($i = 1; $i <= $n; $i++) {
    echo $liczba . " ";
    $liczba = $liczba * $liczba;
}


echo "<h3>15. Losowe liczby</h3>";

$suma = 0;

for ($i = 1; $i <= 10; $i++) {
    $liczba = rand(50, 100);

    echo $liczba . " ";

    $suma = $suma + $liczba;
}

$srednia = $suma / 10;

echo "<br>Suma: " . $suma;
echo "<br>Srednia: " . $srednia;

?>

</body>
</html>
