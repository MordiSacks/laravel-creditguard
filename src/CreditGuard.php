<?php

namespace MordiSacks\LaravelCreditGuard;


use Illuminate\Support\Facades\Facade;

class CreditGuard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'creditguard';
    }
}