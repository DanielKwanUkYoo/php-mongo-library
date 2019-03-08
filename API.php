<?php 
    require_once __DIR__ . "/vendor/autoload.php";

    class API
    {
        private $testCollection;
        private $testCollectionTwo;
        
        function __construct() 
        {
            $client = new MongoDB\Client("mongodb://localhost:27017");
            $this->testCollection = $client->testdb->testcollection;
        }
        function queryAll() 
        {
            $query = $this->testCollection->find([]);
            foreach($query as $result) {
                var_dump($result);
            }
        }
        function queryAdmin() 
        {
            $data = array();
            $query = $this->testCollection->find(
                ['name' => 'Admin User']

            );
            foreach($query as $result) 
            { 
                $info = array(
                    'username' => $result['username'],
                    'email'    => $result['email'],
                    'name'     => $result['name']
                );
                $data[$result['_id']['ObjectId']] = $info;
                // var_dump($data[$result['_id']], $info);
            }
            // echo json_encode($data);

        }
    }

    $api = new API();
    $api->queryAdmin();
?>