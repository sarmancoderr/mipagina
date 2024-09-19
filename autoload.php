<?php
require_once 'vendor/autoload.php';

spl_autoload_register(function($name){
    require_once str_replace('\\', '/', $name) . '.php';
});

set_error_handler(function($errno, $errstr) {
    syslog(LOG_ERR, $errstr);
    return 0;
}, E_DEPRECATED);
