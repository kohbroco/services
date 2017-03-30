<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 31/3/2017
 * Time: 12:04 AM
 */
$stdlibdir = __DIR__ . '/std';
$files = scandir($stdlibdir);
$files = array_diff($files, array('.', '..'));
foreach($files as $file){
    require_once($stdlibdir . "/$file");
}