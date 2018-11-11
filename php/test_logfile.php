<?php

require __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Formatter\JsonFormatter;

// Create the logger
$logger = new Logger('MyAppLog');

// Create the handler
$formatter = new JsonFormatter();
$handler = new RotatingFileHandler('./file.log');
$handler->setFormatter($formatter);

// Now add the handler
$logger->pushHandler($handler, Logger::DEBUG);

// You can now use your logger
for ($i=0; $i < 30000; $i++){
    $logger->info('My logger is now ready');

}