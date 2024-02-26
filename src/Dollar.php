<?php
declare(strict_types=1);

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier) : Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals(object $money): bool
    {
        if (!($money instanceof Money)) {
            return false;
        }
        return $this->amount == $money->amount;
    }
}