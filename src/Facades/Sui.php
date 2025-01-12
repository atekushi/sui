<?php

namespace Atekushi\Sui\Facades;

use Atekushi\Sui\Sui as BaseClass;
use Atekushi\Support\Facade;

class Sui extends Facade
{
    protected static function getClassSubject(): string
    {
        return BaseClass::class;
    }
}