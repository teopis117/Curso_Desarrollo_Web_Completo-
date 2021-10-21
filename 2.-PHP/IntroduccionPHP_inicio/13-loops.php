<?php include 'includes/header.php';

//while

$i=0;//inicializador

while($i<10)
{

echo $i."<br>";
$i++;
}
$b=0;
for($b=0;$b<10;$b++)
{
    echo $b."hola"."<br>";
}

echo "ejercicio fizzbuzz"."<br>";
/*
3 fizz
5 buzz
3 y 5 fizzbuzz
*/

for($a=1;$a<=100;$a++)
{
    if($a%3==0 && $a%5==0)
    {
        echo $a."fizbuzz"."<br>";
    }
    else if($a%3==0)
    {
        echo $a."fiz"."<br>";
    }
    else if($a%5==0)
    {
        echo $a."buzz"."<br>";
    }
    else
    {
        echo $a."<br>";
    }


}




include 'includes/footer.php';