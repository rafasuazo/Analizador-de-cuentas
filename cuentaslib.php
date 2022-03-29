<?php
function buscarCuentas($txtTexto){
    $arrResultado = preg_split("/(\d{13})/", $txtTexto, -1, PREG_SPLIT_DELIM_CAPTURE);
    return $arrResultado;
}
?>
