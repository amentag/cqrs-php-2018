<?php

namespace App\Bus\Command;

use App\Common\CommandBusMiddleware;
use Psr\Log\LoggerInterface;

class CommandBusFactory
{
    public static function build(iterable $handlers, LoggerInterface $logger): CommandBusMiddleware
    {
        return new LoggerMiddleware(
            new CommandBusDispatcher($handlers),
            $logger
        );
    }
}