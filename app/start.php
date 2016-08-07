<?php

  require_once '../vendor/autoload.php';
  $app = new \Slim\Slim();
  $app->container->singleton('db',function(){
    return new PDO(
            'mysql:host=localhost;dbname=slim',
            'root',
            '12345'
      );
  });
  $view = $app->view();
  $view->setTemplatesDirectory('../app/views');
  require_once 'routes.php';
  $app->run();

 ?>
