<?php
   session_start(); 
   if(session_destroy()) {
      unset($_SESSION['username']);
      header("location: login.php");
   }
?>