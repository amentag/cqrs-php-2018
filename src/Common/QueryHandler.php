<?php
/**
 * Created by PhpStorm.
 * User: mentaga
 * Date: 08/11/18
 * Time: 22:59
 */

namespace App\Common;


interface QueryHandler
{
    public function handle(Query $query): array;

    public function listenTo(): string;
}