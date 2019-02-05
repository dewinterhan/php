<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 9:42
 */

/***Arrays rechte haakjes***/

$namen = ['Han Dewinter','Ford','De Panne'];

$namen[]= 'Cursist';
$namen[]= 'Full stack developer';


//WEERGEVEN VAN ARRAYS (OBJECTEN)

print_r($namen);

var_dump($namen);

//ASSOCIATIEVE ARRAYS

$beschrijving = [
    'Cursist' => 'wij zijn full stack developers',
    'Han' => 'is een student'
];

$beschrijving['Cursist1']= 'Han';

echo "Goedemorgen {$beschrijving['Cursist1']}";

var_dump($beschrijving);
?>
<?php include ('footer.php')?>
