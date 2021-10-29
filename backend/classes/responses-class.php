<?php

class responses {
    
    public $response = Array(
        'status' => 'OK',
        'result' => Array(),
    );

    public function error200($str = 'Incorrect data'){
        $this->response['status'] = 'error';
        $this->response['result'] = Array(
            'error_id' => '200',
            'error_msg' => $str,
        );
        return $this->response;
    }

    public function error400(){
        global $response;
        $this->response['status'] = 'error';
        $this->response['result'] = Array(
            'error_id' => '200',
            'error_msg' => 'Incomplete data',
        );
        return $this->response;
    }

    public function error405(){
        global $response;
        $this->response['status'] = 'error';
        $this->response['result'] = Array(
            'error_id' => '405',
            'error_msg' => 'This method is not allowed on this route'
        );
        return $this->response;
    }

    public function error500($str = 'Server error'){
        $this->response['status'] = 'error';
        $this->response['result'] = Array(
            'error_id' => '500',
            'error_msg' => $str,
        );
        return $this->response;
    }

}