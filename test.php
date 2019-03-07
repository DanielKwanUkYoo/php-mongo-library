<?php 
    require 'vendor/autoload.php';
    $client = new MongoDB\Client;
    $test = $client->testdb;
    var_dump($test);

?>