<?php
require "../vendor/autoload.php";

$app = new \Slim\Slim(array(
  "templates.path" => "../templates"
  //Next comment
));

$app->get('/', function () use ($app){
  //Just output the template
  //Another comment
  $app->render("main.php");
  //Another comment
  //More comment
  //Next comment
} );
$app->run();
