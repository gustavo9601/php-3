<?php

/*
 * Al tener el control de la cantidad de memoria usada y la velocidad con la que se ejecuta
 * se puede controlar enbotellamientos y optimizar scripts
 *
 * */

$start = microtime(true);  //capturamos el momento de inicialiacion de script


for ($i = 0; $i < 20000; $i++) {
    echo $i . '<br>';
}


//memory_get_peak_usage()  // devuelve cantidad de meorira usada en el script en bytes
$memoria_usada = memory_get_peak_usage() / 1024 / 1024;

echo '<h1> Memoria Usada =' . $memoria_usada . 'MB</h1>';
$end = microtime(true);  //finalizamos el conteo en segudos de la ejecucion del script
echo '<h1>Tiempo gastado = '. ($end - $start)  .' Segundos</h1>';


?>