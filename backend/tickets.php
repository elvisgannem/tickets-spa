<?php

require_once 'classes/responses-class.php';
require_once 'classes/tickets-class.php';

$_responses = new responses;
$_tickets = new tickets;

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['page'])){
        $page = $_GET['page'];
        $tickets = $_tickets->ticketsList($page);
        echo json_encode($tickets);
    } else if(isset($_GET['id'])) {
        $ticketId = $_GET['id'];
        $ticketData = $_tickets->getTicket($ticketId);
        echo json_encode($ticketData);
    }
} else if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo 'post';
} else if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    echo 'put';
} else if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
    echo 'delete';
} else {
    header('Content-Type: application/json');
    $arrayData = $_response->error405();
    echo json_encode($arrayData);
}