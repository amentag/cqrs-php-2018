<?php

namespace App\Subscription\Query;

use App\Common\Query;
use App\Subscription\Domain\SubscriptionPlan;
use App\Subscription\Domain\SubscriptionPlanRepository;
use App\Subscription\ViewModel\SubscriptionPlanViewModel;

/**
 * Cette classe est un DTO
 */
class FindActiveSubscriptionPlansQueryHandler implements Query
{
    /**
     * @var SubscriptionPlanRepository
     */
    private $repository;

    /**
     * Coloborators: repository
     */
    public function __construct(SubscriptionPlanRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param Query|FindActiveSubscriptionPlansQuery $query
     * @return SubscriptionPlanViewModel[]
     */
    public function handle(Query $query): array
    {
        return array_map(function (SubscriptionPlan $plan) {
            return SubscriptionPlanViewModel::fromEntity($plan);
        }, $this->repository->findActivePlan());
    }

    public function listenTo(): string
    {
        return FindActiveSubscriptionPlansQuery::class;
    }
}