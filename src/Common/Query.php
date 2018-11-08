<?php
/**
 * Created by PhpStorm.
 * User: mentaga
 * Date: 08/11/18
 * Time: 22:56
 */

namespace App\Common;


interface Query
{
    public function handle(Query $query): array;

    public function listenTo(): string;
}