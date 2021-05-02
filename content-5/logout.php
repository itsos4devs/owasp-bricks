<?php
session_start();
session_unset();
session_destroy();
if(isset($_COOKIE['User'])) {
  unset($_COOKIE['User']);
  setcookie('User', '', time() - 3600);
}
header("location:index.php");
exit();
?>