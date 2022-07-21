<?php

    $n = $_GET['num'];
    $n2 = $n1;
    $tot = 0;

    while($n >= 1){
        $n2 = $n2 - 1;
        $tot = $n2 * $n2;
        $n--;
        echo "$tot <br>";
    }
?>  