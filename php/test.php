<?php
$m = new MongoDB\Driver\Manager();
$j = new MongoDB\Driver\Query(['acc' =>'Syow']);
$i = $m->executeQuery('test.col' , $j ) ;
$data = [] ;

foreach ($i as $document) {

    echo $document->mail;

    $data[] = $document ;
echo '<br>';
}
echo $data[0]->acc;


?>
