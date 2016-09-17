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
    $indexcontroller->getNewTest();
    return $this->renderer->render($response, 'index.phtml', $args);
})->setName('index');


