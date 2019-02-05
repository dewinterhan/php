<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 11:35
 */

$a = 5;
$b = 2;

echo -$a .'<br>';
echo $a + $b.'<br>';
echo $a - $b.'<br>';
echo $a * $b.'<br>';
echo $a / $b.'<br>';
echo $a ** $b.'<br>'; //werkt enkel vanaf php versie 5.6
echo $a % $b.'<br>';


/***Voorbeeld van fahrenheid naar celsius***/

$degF = 98.6;
$degC = ($degF-32)/9*5;
echo $degF.' Fahrenheit = '.$degC .'°C'.'<br>';

//Shorthand Notatie

$totaal = 15;
$totaal = $totaal + 2; //lange notatie
$totaal += 2;
$totaal -= 2;
$totaal *= 2;
$totaal /= 2;

echo $totaal.'<br>';


/***++nummer, nummer++, --nummer, nummer --***/

$nummer = 5;
echo $nummer .'<br>';

$nummer++;
echo $nummer .'<br>';

++$nummer;
echo $nummer .'<br>';

$resultaat = $nummer++ *2;

echo 'resultaat is ' .$resultaat .'<br>';


/***CONVENTEER MIN NAAR UREN EN MIN***/

/*$totaalaantalmin = 318;
$min = $totaalaantalmin % 60;
$hours = intdiv($totaalaantalmin, 60);

echo 'De totale tijdsduur is: ' .$hours .' uren en ' .$min .' minuten.';
*/

?>
<?php include ('footer.php')?>
