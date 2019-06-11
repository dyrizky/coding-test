<?php

/**
 * Buatlah program untuk mencari huruf yang pertama duplikat.
 * Input : ABCA, Output : A Input : ABCDEBE, Output : B Input : ABBA, Output : B
 */

$huruf = $_GET['huruf'];//
$temp = [];
for ($i = 0; $i < strlen($huruf); $i++) {
    if (in_array($huruf[$i], $temp)) {
        echo $huruf[$i];
        break;
    } else {
        $temp[] = $huruf[$i];
    }
}
?>