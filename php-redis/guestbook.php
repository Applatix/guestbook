<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'predis/autoload.php';
PredisAutoloader::register();
//if (isset($_GET['cmd']) === true) {
  $host = 'redis-master';
  header('Content-Type: application/json');
  print($_GET['cmd']);
  $client = new PredisClient([
      'scheme' => 'tcp',
      'host'   => $host,
      'port'   => 6379,
    ]);
    $client->set($_GET['key'], $_GET['value']);
    print('{"message": "Updated"}');
?>