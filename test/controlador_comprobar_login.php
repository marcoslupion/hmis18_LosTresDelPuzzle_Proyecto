<?php

// @codeCoverageIgnoreStart

@session_start();
if(!isset($_SESSION["no_admin"]))
  {
    $script = "<script>document.location.assign('../');</script>";
    echo $script;
  }
  // @codeCoverageIgnoreEnd
 ?>
