<?php

require_once 'connection/connection.php';
require_once 'responses-class.php';

class tickets extends connection {

    private $table = 'tickets';
    public function ticketsList($page = 1) {
        $startWith = 0;
        $quantity = 10;
        if($page > 1){
            $startWith = ($quantity * ($page - 1)) + 1;
            $quantity = $quantity * $page;
        }

        $query = "SELECT * FROM " . $this->table . " LIMIT $startWith, $quantity";
        $data = parent::getData($query);
        return $data;
    }

    public function getTicket($id){
        $query = "SELECT * FROM " . $this->table . " WHERE id = $id";
        return parent::getData($query);
    }
}