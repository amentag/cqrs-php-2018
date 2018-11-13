<?php

namespace App\Common;

interface CommandBusMiddleware
{
    public function dispatch(Command $command): CommandResponse;
}