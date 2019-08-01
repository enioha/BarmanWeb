<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

$uname = root;

$pswd = $_POST['password'];


$connection = ssh2_connect('localhost', 22);

if (ssh2_auth_password($connection, $uname, $pswd)) {
      header("Location:main.php ");
} else {
  die('Authentication Failed...');
}
?>
