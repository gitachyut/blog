<?php

  require_once '../vendor/autoload.php';
  $app = new \Slim\Slim([
    'view'=>new \Slim\Views\Twig()
  ]);
  $app->container->singleton('db',function(){
    return new PDO(
            'mysql:host=localhost;dbname=slim',
            'root',
            '12345'
      );
  });
  $view = $app->view();
  $view->setTemplatesDirectory('../app/views');
  $view->parserExtensions =[
    new \Slim\Views\TwigExtension()
  ];
  $app->hook('slim.before', function () use ($app) {
    $app->view()->appendData(array('baseUrl' => '/blog/public'));
  });
  require_once 'routes.php';
  $app->run();

 ?>
