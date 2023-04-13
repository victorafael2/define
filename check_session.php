<?php
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
  // A session expirou
  session_unset();
  session_destroy();
  echo 'expired';
} else {
  // A session ainda está ativa
  $_SESSION['LAST_ACTIVITY'] = time();
  echo 'active';
}
?>
