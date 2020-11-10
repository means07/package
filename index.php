<?php

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class SomeClass {
  private $log;

  function __construct($path, $name = 'log') {
    $this->log = new Logger($name);
    $this->log->pushHandler(new StreamHandler($path, Logger::WARNING));
  }
  
  function warning($msg) {
    $this->log->warning($msg);
  }
 
  function error($msg) {
    $this->log->error($msg);
  }
}
