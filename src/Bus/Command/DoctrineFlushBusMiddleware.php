<?php

namespace App\Bus\Command;

use App\Common\Command;
use App\Common\CommandBusMiddleware;
use App\Common\CommandResponse;
use Doctrine\ORM\EntityManagerInterface;
use Exception;

class DoctrineFlushBusMiddleware implements CommandBusMiddleware
{
    /**
     * @var CommandBusMiddleware
     */
    private $next;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(CommandBusMiddleware $next, EntityManagerInterface $entityManager)
    {
        $this->next = $next;
        $this->entityManager = $entityManager;
    }

    public function dispatch(Command $command): CommandResponse
    {
        $this->entityManager->beginTransaction();
        try {
            $commandResponse = $this->next->dispatch($command);
            $this->entityManager->flush();
            $this->entityManager->commit();
        } catch (Exception $exception) {
            $this->entityManager->rollback();
        }

        return $commandResponse;
    }
}