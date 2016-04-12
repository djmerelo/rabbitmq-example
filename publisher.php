<?php

require_once __DIR__ . '/vendor/autoload.php';

list($host, $port, $user, $password) = include __DIR__ . '/credentials.php';

//define('AMQP_DEBUG', true);
$connection = new \PhpAmqpLib\Connection\AMQPStreamConnection($host, $port, $user, $password);
$channel = $connection->channel();

/**
 * @param \PhpAmqpLib\Channel\AMQPChannel $channel
 * @param \PhpAmqpLib\Message\AMQPMessage $message
 */
function publish(\PhpAmqpLib\Channel\AMQPChannel $channel, \PhpAmqpLib\Message\AMQPMessage $message)
{
    // TODO write code here.
}

$message = new \PhpAmqpLib\Message\AMQPMessage('Hello World');
publish($channel, $message);

$channel->close();
$connection->close();
