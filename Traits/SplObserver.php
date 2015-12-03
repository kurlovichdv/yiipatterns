<?php

namespace yii2patterns\traits;

/**
 * Class SplObserver - Трейт для реализации интерфейса \SplObserver
 * @package yii2patterns\traits
 */
trait SplObserver
{

    public function update(\SplSubject $subject) {
        $this->handle($subject->getContent());
    }
}