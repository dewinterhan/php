<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 12:04
 */

//Opgave: Reeks van 1 tot 10
//instellen van teller

/***While DO***/
$teller = 0;

while ($teller < 10) {
    ++$teller;
    if ($teller %2){
        continue;
    }
    echo $teller . '<br>';
    if ($teller == 6) {
        break;
    };
}

/***Do While***/
$teller= 0;
do{
    ++$teller;
    echo $teller .'<br>';
}while($teller<10);


?>

<?php include ('footer.php')?>
