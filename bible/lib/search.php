<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 18/1/2017
 * Time: 12:05 AM
 */
namespace bible\lib;
use bible\config;

class search
{
    public static function query($q, $version){
        require_once(__DIR__ . '/../config.php');
        $dataroot = config::$dataroot;
        $version_path = $dataroot . "/$version";
        $tokens = explode("\n",$q);
        $clean_tokens = array_map('trim', $tokens);
    }
}