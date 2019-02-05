<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 5/02/2019
 * Time: 13:11
 */

/***MULTIDIMENSIONELE ASSOCIATIEVE ARRAY***/

$mijnVrienden = [
    ['voornaam' => 'Han', 'familienaam' => 'Dewinter'],
    ['voornaam' => 'Ben', 'familienaam' => 'Aesaert'],
    ['voornaam' => 'Tom', 'familienaam' => 'Vanhoutte'],
    ['voornaam' => 'Tim', 'familienaam' => 'Vanhoutte'],
    ['voornaam' => 'Lore', 'familienaam' => 'Kamiel'],
    ['voornaam' => 'Jef', 'familienaam' => 'Potter'],
    ['voornaam' => 'Onnozel', 'familienaam' => 'Manneke']
];

sort($mijnVrienden);

usort($mijnVrienden, function ($a, $b){
        return [$a['familienaam'], $a['voornaam']] <=> [$b['familienaam'], $b['voornaam']];
}); //Werkt enkel vanaf php 7

?>


    <div class="container-fluid">
        <div class="row my-5">
            <h1 class="mx-auto text-dark">Gebruiker gedefineerde sortering</h1>
            <div class="col-10 offset-1">
                <div class="row mt-5">
                    <div class="col-5 text-secondary">
                        <h2>Gebruik van implode functionaliteit</h2>
                        <ul class="list-unstyled ml-3 mt-3">
                            <?php
                            foreach ($mijnVrienden as $vriend){
                                echo '<li>' .implode(' ', $vriend) . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-7">
                        <img class="img-fluid" src="code_images/multi_8.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include ('footer.php')?>