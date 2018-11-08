<?php
/**
 * Created by PhpStorm.
 * User: mentaga
 * Date: 08/11/18
 * Time: 22:19
 */

namespace App\Common;


interface CommandHandler
{
    public function handle(Command $command): CommandResponse;

    public function listenTo(): string;
}