<?php
// Routes

$app->get('/testapp', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("testapp '/' route");
    $testcontroller=new controller\testController;
    $args['test']=$testcontroller->getTest();
    $args['testmember']=$testcontroller->testMember();
    return $this->renderer->render($response, 'test.phtml', $args);
})->setName('testapp');

