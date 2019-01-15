<?php
  date_default_timezone_set($GLOBALS["config"]["timezone"]);

  if($GLOBALS["config"]["devmode"]){
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
  }
 ?>
