<?php

interface Logger
{

}

class Application implements Logger
{
    protected $logger;

    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function getLogger(): Logger
    {
        return $this->logger;
    }
}

$app = new Application();
$app->setLogger(new class implements Logger {

});

var_dump($app->getLogger());


//object(class@anonymous)#2 (0) {
//}
