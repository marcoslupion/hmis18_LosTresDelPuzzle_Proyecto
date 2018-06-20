<?php
// @codeCoverageIgnoreStart
@session_start();
session_destroy();
echo "<script>document.location.assign('../');</script>";
// @codeCoverageIgnoreEnd
 ?>
