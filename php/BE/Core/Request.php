<?php 

class Request {
    public static function post($name) {
        if (is_string($name))
            return $_POST[$name];
        return $_POST;
    }

    public static function get($name) {
        if (is_string($name))
            return $_GET[$name];
        return $_GET;
    }
}