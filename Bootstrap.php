<?php

namespace wdmg\tasks;

use yii\base\BootstrapInterface;


class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->urlManager->addRules([
            //
        ], false);
        $app->controllerMap["migrate"]["class"] = 'yii\console\controllers\MigrateController';
        $app->controllerMap["migrate"]["migrationNamespaces"][] = 'wdmg\tasks\migrations';
    }
}
