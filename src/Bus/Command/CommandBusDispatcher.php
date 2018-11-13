<?php

namespace App\Bus\Command;

use App\Common\Command;
use App\Common\CommandBusMiddleware;
use App\Common\CommandHandler;
use App\Common\CommandResponse;
use LogicException;

class CommandBusDispatcher implements CommandBusMiddleware
{
    /**
     * @var iterable|CommandHandler[]
     */
    private $handlers;

    /**
     * CommandBusDispatcher constructor.
     * @param iterable|CommandHandler[] $handlers
     */
    public function __construct(iterable $handlers)
    {
        foreach ($handlers as $handler) {
            $this->handlers[$handler->listenTo()] = $handler;
        }
    }

    public function dispatch(Command $command): CommandResponse
    {
        $commandClass = get_class($command);
        $handler = $this->handlers[$commandClass];
        if ($handler === null) {
            throw new LogicException("Handler for command $command not found.");
        }

        return $handler->handle($command);
    }
}