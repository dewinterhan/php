<?php include ('header.php')?>

<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 4/02/2019
 * Time: 14:24
 */


/***Functies***/

$version = phpversion();
echo $version .'<br>';


$name ='HAN';
$name = strtolower($name);
echo $name .'<br>';
$name = strtoupper($name);
echo $name .'<br>';

$name = ucfirst(strtolower($name));
echo $name.'<br>';

if (isset($name)){
    echo "true";
}
else {
    echo "false";
}

function hd_converterToMin ($seconden){
    $sec = $seconden % 60;

    if (function_exists('intdiv')){
        $min = intdiv($seconden, 60);
    }
    else{
        $min = ($seconden - $sec)/60;
    }

    $sec = abs($sec);

    $sec = ($sec < 10) ? '0' .$sec : $sec;

    return "$min:$sec";
}

?>

    <p>
        <?php
            echo hd_converterToMin(457);
        ?>
    </p>

<?php include ('footer.php')?>
