<?php
// APPLICATION
define('APPLICATION', 'Catalog');

// HTTP
define('HTTP_SERVER', 'http://localhost:8080/opencart/');

// DIR
define('DIR_OPENCART', 'C:/xampp/htdocs/opencart/');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storagevwvudkum7mnj/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// load env
$env = new \Dotenv\Dotenv('./');
$env->load();

$driver = getenv('DB_DRIVER');
$hostname = getenv('DB_HOSTNAME');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_DATABASE');
$prefix = getenv('DB_PREFIX');
$port = getenv('DB_PORT');

// DB
define('DB_DRIVER', $driver);
define('DB_HOSTNAME', $hostname);
define('DB_USERNAME', $username);
define('DB_PASSWORD', $password);
define('DB_DATABASE', $database);
define('DB_PREFIX', $prefix);
define('DB_PORT', $port);
