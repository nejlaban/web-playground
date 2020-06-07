<?php
require '../vendor/autoload.php';  //run autoloader

Flight::route('/', function() {   //define route and define funcion to handle Yaf_Request_Abstract
  echo 'Hello world!'
});

Flight::start();      //start FlightPHP
 ?>
