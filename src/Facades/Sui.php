<?php

namespace Atekushi\Sui\Facades;

use Atekushi\Sui\Interfaces\ViewInterface;
use Atekushi\Sui\Sui as BaseClass;
use Atekushi\Support\Facade;

/**
 * @package Atekushi/Env
 *
 * @method static ViewInterface load(string $path, array $data = [])
 *
 * @mixin BaseClass
 */
class Sui extends Facade
{
    protected static function getClassSubject(): string
    {
        return BaseClass::class;
    }
}