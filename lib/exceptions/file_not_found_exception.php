<?php
/**
 * Created by PhpStorm.
 * User: Conrad
 * Date: 24/12/2016
 * Time: 9:47 PM
 */

namespace lib;


class file_not_found_exception extends \Exception
{
    public function __construct($filename)
    {
        $message = 'File not found exception: ' . $filename;
        parent::__construct($message, $code = 0, $previous = null);
    }
}