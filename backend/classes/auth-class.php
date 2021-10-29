<?php
require_once 'connection/connection.php';
require_once 'responses-class.php';

class auth extends connection {

    public function login($json){
        $_responses = new responses;
        $data = json_decode($json, true);

        if(!isset($data['user']) || !isset($data['password'])){
            //error
            return $_responses->error400();
        } else {
            $user = $data['user'];
            $password = $data['password'];
            $password = parent::encrypt($password);
            $data = $this->getUserData($user);
            if($data){
                // the password matches?
                if($password == $data[0]['password']){
                    //create token
                    $checkIfTokenExists = $this->createToken($data[0]['id']);
                    if($checkIfTokenExists){
                        $result = $_responses->response;
                        $result['result'] = Array(
                            'token' => $checkIfTokenExists
                        );
                        return $result;
                    } else {
                        return $_responses->error500();
                    }
                } else {
                    return $_responses->error200('The password is not correct');
                }
                
            } else {
                return $_responses->error200('Username does not exist');
            }
        }
    }

    private function getUserData($username){
        $query = "SELECT id, username, password, admin FROM users WHERE username = '$username'"; 
        $data = parent::getData($query);
        if(isset($data[0]['id'])){
            return $data;
        } else {
            return false;
        }
    }

    private function createToken($userId){
        $userId = (int) $userId;
        $val = true;
        $token = bin2hex(openssl_random_pseudo_bytes(16, $val));
        $date = date('Y-m-d H:i');
        $status = 'Active';
        $query = "INSERT INTO users_token (user_id, token, status, date) VALUES ('$userId', '$token', '$status', '$date')";
        $checkIfSaved = parent::insertQuery($query);
        if($checkIfSaved){
            return $token;
        } else {
            return 0;
        }
    }
}