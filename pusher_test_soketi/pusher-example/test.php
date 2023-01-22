<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
  "a1234",
  "a1234",
  "a1234",
[
                'host' => '127.0.0.1',
                'port' => 6001,
                'scheme' => 'http',
                'encrypted' => true,
            ]
);

$pusher->trigger('my-channel', 'my-event', ['message' => 'This is insane, Time:' . date('Y-m-d H:i:s') ]);
