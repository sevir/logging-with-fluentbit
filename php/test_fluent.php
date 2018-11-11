<?php

require __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\SocketHandler;
use Monolog\Formatter\JsonFormatter;

// Create the logger
$logger = new Logger('MyAppLog');

// Create the handler
$formatter = new JsonFormatter();
$handler = new SocketHandler('tcp://127.0.0.1:5170');
$handler->setFormatter($formatter);
$handler->setChunkSize(32*1000);
$handler->setPersistent(true);

// Now add the handler
$logger->pushHandler($handler, Logger::DEBUG);


// You can now use your logger
for ($i=0; $i < 30000; $i++){
    $logger->info('My logger is now ready');

}