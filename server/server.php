<?php 


$dataDisc = file_get_contents(__DIR__. '/data.json');
// $discs = json_decode($data, true);

header('Content-type: application/json');

echo $dataDisc;