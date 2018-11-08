<?php

namespace App\Subscription\Infrastructure\Doctrine;

use App\Subscription\Domain\SubscriptionPlan;
use App\Subscription\Domain\SubscriptionPlanRepository;
use Ramsey\Uuid\Uuid;

class SubscriptionPlanDoctrineRepository implements SubscriptionPlanRepository
{

    public function get(Uuid $id): SubscriptionPlan
    {
        // TODO: Implement get() method.
    }

    public function add(SubscriptionPlan $subscriptionPlan): void
    {
        // TODO: Implement add() method.
    }

    public function delete(Uuid $id): void
    {
        // TODO: Implement delete() method.
    }

    public function getAllPlan(): array
    {
        // TODO: Implement getAllPlan() method.
    }

    public function findActivePlan(Uuid $id): ?SubscriptionPlan
    {
        // TODO: Implement findActivePlan() method.
    }
}