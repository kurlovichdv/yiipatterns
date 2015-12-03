<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 11/30/15
 * Time: 6:59 PM
 */

namespace yii2patterns\traits;


trait Singleton
{

    private static $instance;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

}