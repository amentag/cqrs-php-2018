<?php

namespace App\Subscription\Domain\Entity;

use App\Subscription\Domain\ValueObject\Money;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class SubscriptionPlan
 * @package App\Subscription\Domain
 *
 * Entity
 */
class SubscriptionPlan
{
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var Money
     */
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

    public function __construct(string $name, Money $price, $annualDiscount, DateTime $expirationDate, array $includedActivities)
    {
        $this->name = $name;
        $this->price = $price;
        $this->annualDiscount = $annualDiscount;
        $this->expirationDate = $expirationDate;
        $this->includedActivities = $includedActivities;
    }
}