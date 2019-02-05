<?php include ('header.php')?>
<?php include ('myfunctions.php')?>
<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 5/02/2019
 * Time: 13:11
 */

/***MULTIDIMENSIONELE ASSOCIATIEVE ARRAY***/

//OBJECTEN WORDEN ALTIJD GEMAAKT MET KEYWORD 'NEW!!!!'
/***datetime1 en datetime2 zijn object variabelen***/
$datetime1 = new DateTime();
$datetime2 = new DateTime();

$asia = new DateTimeZone('Asia/Tokyo');
$datetime2 ->setTimezone($asia);

?>




    <div class="container-fluid">
        <div class="row my-5">
            <h1 class="mx-auto text-dark">Datums - Objectvariabelen</h1>
            <div class="col-10 offset-1">
                <div class="row mt-5">
                    <div class="col-5 text-secondary">
                        <h2 class="mb-5">Aangepaste datums via - DateTimeZone</h2>
                            <p class="ml-3 mt-3">
                                <?php
                                    echo $datetime1 ->format('g:ia - l - F j - Y').'<br>';
                                    echo $datetime2 ->format('d - m - Y H:i.s').'<br>';
                                ?>
                            </p>
                    </div>
                    <div class="col-7">
                        <img class="img-fluid" src="code_images/datums_9.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5">
            <div class="col-10 offset-1">
                <div class="row mt-5">
                    <div class="col-5 text-secondary">
                        <h2 class="mb-5">Copyright functie</h2>
                        <P CLASS="ml-3 mt-3">
                            <?php
                                echo tv_copyright('2011');
                            ?>
                        </P>
                    </div>
                    <div class="col-7">
                        <img class="img-fluid" src="code_images/datums_9_oef_2.png" alt="">
                        <img class="img-fluid" src="code_images/datums_9_oef_2_2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include ('footer.php')?>