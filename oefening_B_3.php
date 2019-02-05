<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 11:16
 */

//Opgave:
//Maak 4 sections met elk hun eigen class
//2 sections dragen de class naam members de andere 2 non members

$member = true;

//Wanneer ik enkel de variabele member wijzig naar respectievelijke true or false
//worden ofwel de members sections getoond of de non-members van de pagina

?>


    <h1>Lid of geen Lid</h1>

    <?php if ($member) {?>
    <section class="members">Lid: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eveniet ipsa non nulla numquam. Ad aperiam, architecto commodi distinctio doloremque enim eveniet fuga ipsa optio quibusdam reiciendis sed suscipit, veritatis!</section>
    <section class="members">Lid: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, amet cumque cupiditate eos, illo in, itaque magnam maiores molestiae nobis qui! Architecto cupiditate, doloribus eos minima minus quidem sunt!</section>
    <?php } else { ?>
    <section class="non-members">NIET BETALEN = GEEN CONTENT</section>
    <section class="non-members">NIET BETALEN = GEEN CONTENT</section>
    <?php }?>

<?php include ('footer.php')?>
