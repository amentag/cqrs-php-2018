<?php

use App\Subscription\Command\CreateSubscriptionPlanCommand;
use App\Subscription\Command\CreateSubscriptionPlanCommandHandler;
use App\Subscription\Infrastructure\Doctrine\SubscriptionPlanDoctrineRepository;

/** @var \Doctrine\ORM\EntityManagerInterface $em */
$em;
/** @var \Doctrine\ORM\Mapping\ClassMetadata $class */
$class;

$repository = new SubscriptionPlanDoctrineRepository($em, $class);
$handler = new CreateSubscriptionPlanCommandHandler($repository);
$response = $handler->handle(new CreateSubscriptionPlanCommand(
    'label', 12, 20, '2019-06-30', ['gym', 'tennis']
));

$response->value();