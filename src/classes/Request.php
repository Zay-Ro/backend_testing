<?php

use FFI\Exception;

class Request{

    static function get_number()
    {
        if ((int)$_GET['NUMBER']){
            return $_GET['NUMBER'];
        }
        else throw new ErrorException('Wrong get param NUMBER');
    } 
}