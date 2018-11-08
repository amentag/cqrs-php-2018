<?php

namespace App\Subscription\Command;

use App\Common\Command;
use App\Common\CommandHandler;
use App\Common\CommandResponse;
use App\Subscription\Domain\SubscriptionPlan;
use App\Subscription\Domain\SubscriptionPlanRepository;
use App\Subscription\Infrastructure\Doctrine\SubscriptionPlanDoctrineRepository;
use DateTime;

/**
 * Class CreateSubscriptionPlanCommandHandler
 * @package App\Subscription\Command
 *
 *
 */
class CreateSubscriptionPlanCommandHandler implements CommandHandler
{
    /**
     * @var SubscriptionPlanRepository
     */
    private $repository;

    /**
     * On inject dans le contructeur les "collaborateurs", ici SubscriptionPlanRepository
     */
    public function __construct(SubscriptionPlanRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Command|CreateSubscriptionPlanCommand $command
     */
    public function handle(Command $command): CommandResponse
    {
        $subscription = new SubscriptionPlan(
            $command->name,
            $command->price,
            $command->annualDiscount,
            new DateTime($command->expirationDate),
            $command->includedActivities
        );

        $this->repository->add($subscription);
        return CommandResponse::withValue($subscription->id);
    }

    public function listenTo(): string
    {
        return CreateSubscriptionPlanCommand::class;
    }
}