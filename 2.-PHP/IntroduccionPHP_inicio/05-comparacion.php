<?php include 'includes/header.php';

$numero1=20;
$numero2=30;
$numero3=30;
$numero4="30";

// mayor >
var_dump($numero1>$numero2);

echo "<br>";
// menor <
var_dump($numero1<$numero2);
echo "<br>";
// menor o igual <=
var_dump($numero1<=$numero2);
echo "<br>";
// mayor o igual >=
var_dump($numero1>=$numero2);
echo "<br>";

// igual a 
var_dump($numero1==$numero2);
echo "<br>";
// exactamente igual
var_dump($numero1===$numero2);
echo "<br>";

//   -1 si izquierda es menor
//  0 si es igual
//  1 si izquierda es mayor menor
var_dump($numero1<=>$numero2);
echo "<br>";




include 'includes/footer.php';