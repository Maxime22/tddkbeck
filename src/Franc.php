<?php
declare(strict_types=1);

namespace App;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    public function times(int $multiplier) : Money
    {
        return new Franc($this->amount * $multiplier, null);
    }

}