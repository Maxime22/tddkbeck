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

    public function equals(object $object): bool
    {
        if (!($object instanceof Dollar)) {
            return false;
        }
        $dollar = $object;
        return $this->amount == $dollar->amount;
    }
}