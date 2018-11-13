<?php

namespace App\Bus\Command;

use App\Common\Command;
use App\Common\CommandBusMiddleware;
use App\Common\CommandResponse;
use Psr\Log\LoggerInterface;

class LoggerMiddleware implements CommandBusMiddleware
{
    /**
     * @var CommandBusMiddleware
     */
    private $next;
    /**
     * @var LoggerInterface
     */
    private $logger;

    public function __construct(CommandBusMiddleware $next, LoggerInterface $logger)
    {
        $this->next = $next;
        $this->logger = $logger; // collaborator
    }

    public function dispatch(Command $command): CommandResponse
    {
        $startTime = microtime(true);
        $response = $this->next->dispatch($command);
        $endTime = microtime(true);
        $elapsed = $endTime - $startTime;

        $message = 'Command ' . get_class($command) . ' took: ' . $elapsed;
        $this->logger->info($message);

        return $response;
    }
}