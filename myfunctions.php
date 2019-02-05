<?php
/**
 * Created by PhpStorm.
 * User: Han
 * Date: 5/02/2019
 * Time: 14:55
 */

function tv_copyright($startYear) {
    $currentYear = date('Y');
    if ($startYear < $currentYear) {
        $currentYear = date('Y');
        return "&copy; $startYear&dash;$currentYear";
    }
    else {
        return "&copy; $startYear";
    }
}
?>