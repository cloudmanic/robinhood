<?php
  require_once __DIR__ . '/../vendor/autoload.php';
  include 'RobinHoodObj.php';
  
  $rh = new RobinHoodObj();
  
  $rh->auth('your username here', 'your password here');