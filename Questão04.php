<?php

$num = $_POST['num'];

if ($num > 0)
    echo "positivo";
else if ($num == 0)
    echo "nulo";
else
    echo "negativo";

?>