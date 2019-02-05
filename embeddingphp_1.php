<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 9:42
 */

$boek = '"Cursus backend developer 2019"';
$auteur = 'Ikke den dikke';
$leeftijd = 45;

?>

    <h1>
        <?php
            echo $boek;
        ?>
    </h1>
    <h2>
        <?php
        echo 'Auteur: ' .$auteur .'<br>' .'Leeftijd: ' .$leeftijd;
        ?>
        <p>Hierboven werden variabelen dynamisch via php ingeladen</p>
    </h2>

<?php include ('footer.php')?>
