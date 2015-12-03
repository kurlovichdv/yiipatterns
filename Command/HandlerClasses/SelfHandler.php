<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 11/30/15
 * Time: 6:26 PM
 */

namespace yii2patterns\command\handlerclasses;

use yii2patterns\Contracts\Bus\Handler as CommandHandlerContract;
use yii2patterns\Contracts\Singleton as SingletonContract;
use yii2patterns\traits\SplObserver as SplObserverTrait;
use yii2patterns\traits\Singleton as SingletonTrait;

class SelfHandler implements CommandHandlerContract, SingletonContract, \SplObserver
{

    use SplObserverTrait;
    use SingletonTrait;

    public function handle($subject){
        $subject->getObject()->handle();
    }
}