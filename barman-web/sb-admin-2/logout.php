<?php

// primeiro destruímos os dados associados à sessão
  $_SESSION = array();
// destruímos então o cookie relacionado a esta sessão
  if(isset($_COOKIE[session_name()])){
    setcookie(session_name(), '', time() - 1000, '/');
  }
  
  // finalmente destruimos a sessão
  session_destroy();

header("Location:../index.html");

  // vamos verificar se a sessão foi realmente destruída
  //echo "<br><br>O nome é: " . $_SESSION["usuario"];
?>
