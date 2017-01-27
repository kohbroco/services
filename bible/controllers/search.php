<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 17/1/2017
 * Time: 11:58 PM
 */

namespace bible\search;

use bible\config;

class search
{
    public static function query($q, $version){
        require_once(__DIR__ . '/../config.php');
        $dataroot = config::$dataroot;
        $version_path = $dataroot . "/$version";
    }
}