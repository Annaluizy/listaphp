<?php

    

    for($i=1;$i<=7;$i++) {
        $n[$i] = $_POST['n{$i}']; 
        echo $n[$i]^2;
    }

?>