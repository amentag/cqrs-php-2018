<?php

namespace App\Subscription\Infrastructure\Doctrine;

use App\Subscription\Domain\SubscriptionPlan;
use App\Subscription\Domain\SubscriptionPlanRepository;

class SubscriptionPlanInMemoryRepository implements SubscriptionPlanRepository
{
    public function add(SubscriptionPlan $subscriptionPlan)
    {
        // TODO: Implement add() method.
    }
}