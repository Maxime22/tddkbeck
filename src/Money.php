<?php
declare(strict_types=1);

namespace App;

abstract class Money
{
    protected $amount;
    protected $currency;

    abstract protected function times(int $multiplier): Money;

    public static function dollar($amount): Money
    {
        return new Dollar($amount, null);
    }

    public static function franc($amount): Money
    {
        return new Franc($amount, "CHF");
    }

    public function equals(object $money): bool
    {
        if (!($money instanceof Money) || (get_class($this) != get_class($money))) {
            return false;
        }
        return $this->amount == $money->amount;
    }

    public function currency(): string
    {
        return $this->currency;
    }
}