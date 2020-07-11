<?php

//requriendo la libreria importada con composer

date_default_timezone_set('Europe/London');
//faker, generea nombres aleatorios
require_once './vendor/autoload.php';
//phpexcel, requireindo biblioteca
require_once dirname(__FILE__) . '/vendor/phpoffice/phpexcel/Classes/PHPExcel.php';

$llamandoFaker = Faker\Factory::create();  //instancia de Faker
$llamandoPHPExcel = new PHPExcel();  //instancia de phpexcel
for ($i = 0; $i < 100; $i++) {
    $nombre = $llamandoFaker->name;
    echo $nombre . '<br/>';
    $llamandoPHPExcel->setActiveSheetIndex(0)->setCellValue("A{$i}", $nombre);

}


//creando el archivo excel
$writer = PHPExcel_IOFactory::createWriter($llamandoPHPExcel, 'Excel5');
$writer->save('office.xls');

?>