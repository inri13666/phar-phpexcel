<?php
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (version_compare(PHP_VERSION, '5.3.0') < 0) {
    exit("PHP must be 5.3.0+");
}
Phar::mapPhar();
$basePath = 'phar://' . __FILE__ . '/';
require_once $basePath . 'autoload.php';

__HALT_COMPILER();
?>
