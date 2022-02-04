<?php

use FFI\Exception;

class Request{

    static function get_number()
    {
        if (!is_int($_GET['NUMBER'])){
            throw new Exception('Wrong get param NUMBER');
        }
        return $_GET['NUMBER'];
    } 
}