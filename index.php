<?php
  $GLOBALS["config"] = array(
    "appName" => "PHPcat", //your app name
    "version" => "0.1.0", //your app version
    "domain" => "localhost:6969", //your domain
    "timezone" => "europe/amsterdam", //your timezone
    "devmode" => true, //error handling on or of
    "path" => array(
      "app" => "app/",
      "core" => "core/",
      "session" => "app/sessions/",
      "basePath" => "/Users/yourname/Documents/your-app", //your server path this is the example
      "index" => "index.php"
    ),
    "defaults" => array(
      "controller" => "main",
      "method" => "index"
    ),
    "routes" => array(),
    "database" => array( //your database connection
      "host" => "localhost",
      "username" => "root",
      "password" => "",
      "name" => "your-database"
    )
  );

  $GLOBALS["instances"] = array();
  require_once $GLOBALS["config"]["path"]["core"]."autoload.php";
  require_once $GLOBALS["config"]["path"]["core"]."process.php";

  new router();

 ?>
