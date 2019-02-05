<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 13:08
 */

/***For Loop***/
$deelnemers = ['Tom', 'Tim', 'Ruben', 'Lore', 'Brent'];
$aantalDeelnemers = count($deelnemers);

$beschrijving =[
    'frontEnders' => 'het verzorgen van de brol van de designer',
    'backEnders' => 'de elite',
    'fullStack' => 'database syntax',
]

?>


    <h1>De deelnemers</h1>
    <ul class="list-group">
    <?php
        for ($teller = $aantalDeelnemers-1; $teller >= 0; --$teller){
            echo "<li class='list-group-item'>$deelnemers[$teller]</li>";
        }
    ?>
    </ul>

    <h2>Foreach</h2>
    <h3>Gewone array</h3>
    <ul class="list-group">
        <?php
            foreach ($deelnemers as $cursist){
                echo "<li>$cursist</li>";
            }
        ?>
    </ul>

    <h3>associatieve array</h3>
    <ul class="list-group">
    <?php
    foreach ($beschrijving as $key => $value){
        echo "<li>$key is $value</li>";
    }
    ?>
    </ul>


<?php include ('footer.php')?>
