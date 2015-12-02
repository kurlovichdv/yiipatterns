<?php
/**
 * Created by PhpStorm.
 * User: dmitriy
 * Date: 11/30/15
 * Time: 6:29 PM
 */

namespace yii2patterns\Contracts\Bus;


interface Handler
{

    /**
     * @param $object
     * @return mixed
     */
    public function handle($object);

}