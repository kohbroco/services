<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 25/12/2016
 * Time: 11:00 PM
 */
namespace lib\web;
class generic{
    public static function redirect($url){
        header("Location: $url");
        exit;
    }
}