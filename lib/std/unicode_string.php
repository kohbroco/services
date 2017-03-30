<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 31/3/2017
 * Time: 12:02 AM
 */
namespace stdlib;
class unicode_string{
    public static function trim($str){
        return preg_replace('/^\p{Z}+|\p{Z}+$/u', '', $str);
    }
}