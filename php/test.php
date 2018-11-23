<?php
$m = new MongoDB\Driver\Manager();
$j = new MongoDB\Driver\Query(['acc' =>'Syow']);
$i = $m->executeQuery('test.col' , $j ) ;
foreach ($i as $document) {
    print_r($document);

echo '<br>';
}


?>
