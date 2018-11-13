<?php

namespace App\Architecture\Controller;

use App\Bus\Command\CommandBusDispatcher;
use App\Subscription\Command\CreateSubscriptionPlanCommand;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class PlansResourceController
 * @package App\Architecture\Controller
 *
 * @Route("/plans")
 */
class PlansResourceController
{
    /**
     * @var \Serializable
     */
    private $serializable;
    /**
     * @var CommandBusDispatcher
     */
    private $commandBusDispatcher;

    public function __construct(CommandBusDispatcher $commandBusDispatcher, SerializerInterface $serializable)
    {
        $this->serializable = $serializable;
        $this->commandBusDispatcher = $commandBusDispatcher;
    }

    /**
     * @param Request $request
     * @return Response
     *
     * @Route("/", methods={"POST"})
     */
    public function create(Request $request)
    {
        /** @var CreateSubscriptionPlanCommand $command */
        $command = $this->serializable->deserialize(
            $request->getContent(),
            CreateSubscriptionPlanCommand::class,
            'json'
        );

        $response = $this->commandBusDispatcher->dispatch($command);

        return Response::create($response->value());
    }
}