<?php
class connection {

    private $server;
    private $user;
    private $password;
    private $database;
    private $port;
    private $connection;


    function __construct(){
        $dataList = $this->connectionData();
        foreach ($dataList as $key => $value) {
            $this->server = $value['server'];
            $this->user = $value['user'];
            $this->password = $value['password'];
            $this->database = $value['database'];
            $this->port = $value['port'];
        }
        $this->connection = new mysqli($this->server,$this->user,$this->password,$this->database,$this->port);
        if($this->connection->connect_errno){
            echo "Something goes wrong";
            die();
        }

    }

    private function connectionData(){
        $dir = dirname(__FILE__);
        $jsonData = file_get_contents($dir . "/" . "config");
        return json_decode($jsonData, true);
    }

    private function convertUtf8($array){
        array_walk_recursive($array, function($item, $key){
            if(!mb_detect_encoding($item, 'utf-8', true)){
                $item = utf8_encode($item);
            }
        });
        return $array;
    }

    public function getData($query){
        $results = $this->connection->query($query);
        $resultArray = array();
        foreach ($results as $key) {
            $resultArray[] = $key;
        }
        return $this->convertUtf8($resultArray);
    }

    public function insertQuery($query){
        $results = $this->connection->query($query);
        return $this->connection->affected_rows;
    }

    public function insertQueryId($query){
        $results = $this->connection->query($query);
        $rows = $this->connection->affected_rows;
        if($rows >= 1){
            return $this->connection->insert_id;
        } else {
            return 0;
        }
    }

    protected function encrypt($str){
        return md5($str);
    }




}