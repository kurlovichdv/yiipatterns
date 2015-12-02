<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 11/27/15
 * Time: 4:22 PM
 */

namespace yii2patterns\command;

use yii2patterns\Contracts\Bus\Dispatcher as CommandBusContract;
use yii2patterns\traits\SplSubject as SplSubjectTrait;
use yii2patterns\command\handlerclasses\SelfHandler;
class CommandBus implements \SplSubject, CommandBusContract
{
    use SplSubjectTrait;

    private $observers = array();


    public function construct(){

    }
    /**
     * Функция - обработчик команды, создает объект класса команды и передает его слушателям
     * @param $command
     * @param \ArrayAccess $commandData
     */
    public function handle($command, \ArrayAccess $commandData = null)
    {

        print_r($command);exit;
        $class = new ReflectionClass($command);

        $object = $class->newInstanceArgs($commandData);

        /* Если у класса нет интерфейсов, то выполняем его в контексте класса selfHanding, иначе кидаем подписчикам, реализующим интерфейсы */

        if(empty($class->getInterfaces())){
            SelfHandler::getInstance()->handle($object);
        }else{
            $this->notify($object);
        }

    }

}