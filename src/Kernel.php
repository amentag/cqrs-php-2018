<?php

namespace App;

use App\Common\CommandHandler;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class Kernel
{
    protected function build(ContainerBuilder $container)
    {
        $container
            ->registerForAutoconfiguration(CommandHandler::class)
            ->addTag('ddd.command_handler');
    }
}