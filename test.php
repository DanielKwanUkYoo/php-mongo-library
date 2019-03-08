<?php 
    require_once __DIR__ . "/vendor/autoload.php";
    // $collection = (new MongoDB\Client)->test->users;
    $client = new MongoDB\Client("mongodb://localhost:27017");
    $testdb = $client->testdb;
    $testcollection = $testdb->testcollection;
    // $testCollection = $testdb->createCollection('testcollection');

    // $find = $testdb->testcollection->find(
    //     [
    //         'name' => 'Alice'
    //     ],
    //     [
    //         'limit' => 0,
    //     ]
    // );
    $updateResult = $testcollection->updateOne(
        ['name' => 'Alice'],
        ['$set' => ['name' => 'Daniel']]
    );
    var_dump($updateResult);
    // $listTestCollection = $testdb->testcollection->listDocuments();
    // foreach($listTestCollection as $result) {
    //     var_dump($result);
    // }
    
    // foreach($find as $result) {
    //     var_dump($result);
    // }

    // foreach ($testdb->listCollections() as $collection) {
    //     print_r($collection);
    // }
    // $insertResult = $client->testdb->testcollection->insertOne(['_id' => 2, 'name' => 'Alice']);
    // var_dump($insertResult->getInsertedId());
    // var_dump($testdb->testcollection->findOne(['username' => "admin"]));
    // $testCollection = $testdb->createCollection('testCollection');
    // printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
    
?>