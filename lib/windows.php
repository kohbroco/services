<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 24/12/2016
 * Time: 9:44 PM
 */

namespace lib;
use transposer\config;

class windows
{
    const BIN_DIR = __DIR__ . '/bin/windows';
    public static function scandir($directory){
        if(file_exists($directory)){
            $scan_exe = self::BIN_DIR . '/scandir.exe';
            $output_file = \config::temp_path_hash($directory);
            $cmd = "$scan_exe \"$directory\" \"$output_file\"";
            exec($cmd);
            $handle = file_get_contents($output_file);
            $files = explode("\n", $handle);
            return $files;
        }
        else{
            throw new directory_not_found_exception($directory);
        }
    }
}