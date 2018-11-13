<?php

namespace App\Subscription\Infrastructure\Doctrine;

use App\Subscription\Domain\Entity\SubscriptionPlan;
use App\Subscription\Domain\Repository\SubscriptionPlanRepository;
use Doctrine\ORM\EntityRepository;
use Ramsey\Uuid\Uuid;

class SubscriptionPlanDoctrineRepository extends EntityRepository implements SubscriptionPlanRepository
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

    public function findActivePlan(): array
    {
        // TODO: Implement findActivePlan() method.
    }
}