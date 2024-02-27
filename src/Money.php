<?php
declare(strict_types=1);

namespace App;

abstract class Money
{
    protected $amount;

    abstract protected function times(int $multiplier);

    public static function dollar($amount): Money
    {
        return new Dollar($amount);
    }

    public static function franc($amount): Money
    {
        return new Franc($amount);
    }

    public function equals(object $money): bool
    {
        if (!($money instanceof Money) || (get_class($this) != get_class($money))) {
            return false;
        }
        return $this->amount == $money->amount;
    }
}