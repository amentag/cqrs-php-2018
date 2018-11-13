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
    public $name;
    public $price;
    public $currency;
    public $annualDiscount;
    public $expirationDate;
    public $includedActivities;

    public function __construct(string $name, float $price, string $currency, int $annualDiscount, string $expirationDate, array $includedActivities)
    {
        $this->name = $name;
        $this->price = $price;
        $this->currency = $currency;
        $this->annualDiscount = $annualDiscount;
        $this->expirationDate = $expirationDate;
        $this->includedActivities = $includedActivities;
    }
}