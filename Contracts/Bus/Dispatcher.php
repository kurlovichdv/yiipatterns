<?php

namespace yii2patterns\Contracts\Bus;

use Closure;
use ArrayAccess;

interface Dispatcher
{

    /**
     * @param $command
     * @param Closure|null $afterResolving
     * @return mixed
     */
    public function handle($command, \ArrayAccess $commandData = null);

}
