<?php

    $valor = $_POST['valor'];

    $dados = explode(":", $valor);

    echo $dados[0]*60+$dados[1];    

?>