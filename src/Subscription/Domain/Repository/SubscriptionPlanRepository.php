<?php

namespace App\Subscription\Domain\Repository;

use App\Common\Repository;
use App\Subscription\Domain\Entity\SubscriptionPlan;
use Ramsey\Uuid\Uuid;

interface SubscriptionPlanRepository extends Repository
{
    public function get(Uuid $id): SubscriptionPlan;
    public function add(SubscriptionPlan $subscriptionPlan): void;
    public function delete(Uuid $id): void;
    public function getAllPlan(): array;
    public function findActivePlan(): array;
}