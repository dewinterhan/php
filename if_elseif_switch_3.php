<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 10:57
 */

$naam = "Han Dewinter";
$dag = "maandag";


/***IF - ELSEIF - ELSE***/

if ($naam == 'Han Dewinter' && $dag == 'maandag') {
    echo $naam.' is inderdaad mijn naam en de dag is '.$dag .'<br>';
}
elseif($naam == 'Tom') {
    echo "Hallo ik ben " .$naam;
}
else {
    echo 'Wie ben ik, ik weet het niet';
}

/***INTENARY OPERATOR (shorthand notatie voor if else)***/

if ($naam == 'Han Dewinter' && $dag == 'maandag'):
    echo $naam.' is inderdaad mijn naam en de dag is '.$dag.'<br>';
elseif($naam == 'Tom'):
    echo "Hallo ik ben " .$naam;
else:
    echo 'Wie ben ik, ik weet het niet';
endif;


$antwoord = 100;
$resultaat = ($antwoord == 42) ?'Ik kan full stack developer worden' : 'Blijven oefenen';

echo 'Resultaat: '.$resultaat.'<br>';

/***SWITCH***/

$naam = 'Tom';
switch ($naam) {
    case 'Han Dewinter':
        echo 'Dit is Han Dewinter';
    break;
    case 'Tom':
        echo 'Dit is Tom';
    break;
    default:
        echo 'Dit is een andere naam';
}

?>

<?php include ('footer.php')?>
