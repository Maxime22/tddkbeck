<?php
declare(strict_types=1);

namespace App;

class Money
{
    protected $amount;

    public function equals(object $money): bool
    {
        if (!($money instanceof Money) || (get_class($this) != get_class($money))) {
            return false;
        }
        return $this->amount == $money->amount;
    }
}