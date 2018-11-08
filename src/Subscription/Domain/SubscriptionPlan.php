<?php

namespace App\Subscription\Domain;

use DateTime;

class SubscriptionPlan
{
    public $id;

    /**
     * @var string
     */
    public $name;
    public $price;
    public $annualDiscount;
    /**
     * @var DateTime
     */
    public $expirationDate;
    /**
     * @var array
     */
    public $includedActivities;

    public function __construct(string $name, $price, $annualDiscount, DateTime $expirationDate, array $includedActivities)
    {
        $this->name = $name;
        $this->price = $price;
        $this->annualDiscount = $annualDiscount;
        $this->expirationDate = $expirationDate;
        $this->includedActivities = $includedActivities;
    }
}