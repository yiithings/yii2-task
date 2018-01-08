<?php

namespace yiithings\task;

use yii\base\BootstrapInterface;
use yii\console\Application as ConsoleApplication;

class Module extends \yii\base\Module implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if ($app instanceof ConsoleApplication) {
            $app->controllerMap['task'] = 'yiithings\task\commands\DefaultController';
        }
    }
}