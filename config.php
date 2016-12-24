<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 24/12/2016
 * Time: 8:43 PM
 */
require_once(__DIR__ . '/environments.php');
class config
{
    const ENVIRONMENT = \environment::DEVELOPMENT;
    public static function temp_path_hash($path){
        return self::temproot() . '/' . md5($path);
    }
    public static function temproot(){
        switch (self::ENVIRONMENT){
            case \environment::DEVELOPMENT:
                return 'C:\inetpub\data\temp';
            case \environment::PRODUCTION:
                return 'C:\inetpub\data\temp';
        }
        return null;
    }
}