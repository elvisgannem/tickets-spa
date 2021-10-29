<?php
require_once 'classes/auth-class.php';
require_once  'classes/responses-class.php';

$_auth = new auth;
$_responses = new responses;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $body = file_get_contents('php://input');
    $arrayData = $_auth->login($body);

    header('Content-Type: application/json');

    if(isset($arrayData['result']['error_id'])){
        $responseCode = $arrayData['result']['error_id'];
        http_response_code($responseCode);
    } else {
        http_response_code(200);
    }
    echo json_encode($arrayData);

} else {
    header('Content-Type: application/json');
    $arrayData = $_response->error405();
    echo json_encode($arrayData);
}