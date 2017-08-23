<?php
  //function __autoload($url) {
    //require("$url.php");
  //}

  spl_autoload_register(function ($class_name) {
      include $class_name . '.php';
  });

$a = new hello;
$b = $a->abc();
echo $b;
