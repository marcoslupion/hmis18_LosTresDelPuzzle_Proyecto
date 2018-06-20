<?php
/**
 * @codeCoverageIgnore
 */
@session_start();
if(!isset($_SESSION["no_admin"]))
  {
    $script = "<script>document.location.assign('../');</script>";
    echo $script;
  }
 ?>
