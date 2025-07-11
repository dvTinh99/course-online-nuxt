<?php 

class Controller {
    public static function returnSuccess($data){
        return json_encode([
            'data' => $data,
            'code' => 200
        ], JSON_PRETTY_PRINT);
    }
    public static function returnError($message){
        return json_encode([
            'message' => $message,
            'code' => 500
        ], JSON_PRETTY_PRINT);
    }
}