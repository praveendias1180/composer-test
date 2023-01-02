<?php

require_once __DIR__ . '/vendor/autoload.php';

use Praveendias1180\Pdf\Printer;

$pdf = new Printer();
$pdf->print();