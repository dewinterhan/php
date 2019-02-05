<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 9:42
 */

/***Arrays rechte haakjes***/

$boek = [
    'title' => 'De cursus backend developer 2019',
    'auteur' => 'Tom Vanhoutte',
    'cursist' => 'Han',
    'beschrijving' => 'Stap voor sta cursus PHP'
];

$figuranten = [
    'Wiet Vanpimpezeel',
    'Kon Strukt',
    'Mis Poes',
    'An Toon',
    'Piet Luttig',
    'Ambe Tant'
];

?>

<p>Opgave:</p>
<p>Zorg dat er in de h1 en de titel tag de titel van de cursus komt te staan</p>
<p>h2 bevat auteur</p>
<p>Beschrijving in blockquote</p>
<p>implementeer bootstrap</p>
<p>Zorg ervoor dat de figuaranten in een list-group komen te staan
    De titel is een h3 met de tekst figuranten</p>

<h1><?php  echo "{$boek['title']}" ?></h1>
<h2><?php  echo "{$boek['auteur']}" ?></h2>
<blockquote><?php  echo "{$boek['beschrijving']}" ?></blockquote>
<h3>Figuranten</h3>
<ul class="list-group">
    <li class="list-group-item"><?php echo $figuranten[0]?></li>
    <li class="list-group-item"><?php echo $figuranten[1]?></li>
    <li class="list-group-item"><?php echo $figuranten[2]?></li>
    <li class="list-group-item"><?php echo $figuranten[3]?></li>
    <li class="list-group-item"><?php echo $figuranten[4]?></li>
</ul>

<?php include ('footer.php')?>