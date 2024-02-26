<?php
declare(strict_types=1);

namespace App;

class Franc extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier) : Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals(object $object): bool
    {
        if (!($object instanceof Franc)) {
            return false;
        }
        $dollar = $object;
        return $this->amount == $dollar->amount;
    }
}