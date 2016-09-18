<?php
/**
请实例化控制器，并且在控制器中获取到模型数据，然后传递给$args数组


**/
namespace app\http;
$app->get('/', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    // Render index view
    $indexcontroller=new controller\indexController;
    $args['randomxiaohua']=$indexcontroller->getRandomTest();
    
    return $this->renderer->render($response, 'index.phtml', $args);
})->setName('index');

$app->get('/pic', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/pic' route");
    // Render index view
     $piccontroller=new controller\picController;
     $args['pic']=$piccontroller->getPic();
    
    return $this->renderer->render($response, 'pic.phtml', $args);
})->setName('pic');



