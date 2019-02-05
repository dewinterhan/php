<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 13:39
 */

$kolommen = 10;
$rijen = $kolommen;
$tellerKolommen = 0;
$tellerRijen = 0;
?>

    <?php
    echo "<table class='table'>";
    while ($tellerKolommen<$kolommen) {
        $tellerKolommen ++;
        echo '<th class="bg-dark text-white">'.$tellerKolommen .'</th>';
    }


    for ($tellerRijen=1; $tellerRijen <= $rijen; $tellerRijen++){

        echo '<tr>';

        for ($tellerKolommen=1;$tellerKolommen <= $kolommen; $tellerKolommen++)
            echo '<td>' .$tellerKolommen*$tellerRijen.'</td>';
        '</tr>';
    }

    echo"</table>";
    ?>

<?php include ('footer.php')?>

