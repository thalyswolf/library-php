<?php
  session_start();
  session_unset('username');
  header("Location:dash");
 ?>
