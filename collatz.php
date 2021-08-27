<?php

$numero = $_POST['num'];

function collatzFun($num) {
    $D = $num;
    $cadena = "";
    $cadena .= '<table>';
    while ($D > 1) {
        if ($D%2 == 0) {
            $r = $D/2;
            $cadena .= '<tr><td>'.$D.' / 2 = '.$r.'</td></tr>';
            $D = $r;
        }else {
            $r = $D*3+1;
            $cadena .= '<tr><td>'.$D.' x 3 + 1 = '.$r.'</td></tr>';
            $D = $r;
        }
    }
    $cadena .= '</table>';
    return $cadena;
}

echo collatzFun($numero);

?>