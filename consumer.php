<?php

require_once __DIR__ . '/vendor/autoload.php';

list($host, $port, $user, $password) = include __DIR__ . '/credentials.php';

//define('AMQP_DEBUG', true);
$connection = new \PhpAmqpLib\Connection\AMQPStreamConnection($host, $port, $user, $password);
$channel    = $connection->channel();

// TODO Write the consume method here.

while (count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();
