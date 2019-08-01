<?
session_start();
if (!isset ($_SESSION['usuario']) == true) {
   unset($_SESSION['usuario']);
   header('location:../index.html');
} else {
  
   header('location:main.php');
}
?>
