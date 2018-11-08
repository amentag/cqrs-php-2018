<?php

namespace App\Subscription\Command;

use App\Common\Command;

/**
 * Class CreateSubscriptionPlanCommand
 * @package App\Subscription\Command
 *
 * Une command est un DTO
 */
class CreateSubscriptionPlanCommand implements Command
{
    public $price;
    public $name;
    public $annualDiscount;
    public $expirationDate;
    public $includedActivities;

    public function __construct(string $name, int $price, int $annualDiscount, string $expirationDate, array $includedActivities)
    {
        $this->name = $name;
        $this->price = $price;
        $this->annualDiscount = $annualDiscount;
        $this->expirationDate = $expirationDate;
        $this->includedActivities = $includedActivities;
    }
}