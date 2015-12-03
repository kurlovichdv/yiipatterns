<?php

namespace yii2patterns\traits;

/**
 * Class SplObserver - Трейт для реализации интерфейса \SplSubject
 * @package yii2patterns\traits
 */
trait SplSubject
{

    public function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {

        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    public function notify($object) {
        foreach ($this->observers as $value) {
            $value->update($object);
        }
    }
}