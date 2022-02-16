<?php 
//Dump form output on POST requests
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
  print("<pre>");
  var_dump($_POST);
  print("</pre>");
}

//Serve GET requests
include 'tpl/top.php';

if (isset($_GET['page'])) {
  $baseDir= dirname(__FILE__);
  $reqFile= $_GET['page'];
  $file = $baseDir . '/tpl/' . $reqFile . '.php';

  if(file_exists($file)) include($file);
  else include('tpl/404.php');
}
else {
  include('tpl/home.php');
}

include 'tpl/bottom.php' 
?>