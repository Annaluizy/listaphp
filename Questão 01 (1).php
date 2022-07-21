<!DOCTYPE html>
<html>
    <head>
        <title>Antecessor e sucessor</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
    </head>
    <body>
    <h2 style="font-family:verdana;">Este site le um número e imprimi seu sucessor e antecessor</h2>
        
        <form method="post">
            
                    <tr>
                        <td>
                            <label for="um_numero">Digite o valor do número:</label>
                        </td>
                        <td>
                            <input name="um_numero" required="required" step="1" type="number" />
                        </td>
                    </tr>
                  
                        <td colspan="2" rowspan="1">
                            <input value="Enviar" type="submit" />
</td>

<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $um_numero = intval ($_POST['um_numero']);
    $antecessor=$um_numero-1;
    $sucessor=$um_numero+1;
    echo 'Antecessor: ' . $antecessor . "<br/>\n";
    echo 'Sucessor: ' . $sucessor . "<br/>\n";
}
 
?>
                    
                
           
        </form>
    </body>
</html>
