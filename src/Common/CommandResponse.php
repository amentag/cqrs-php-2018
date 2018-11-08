<?php

namespace App\Common;

interface CommandResponse
{
    public static function withValue($id): self;

    public function value(): string;
}