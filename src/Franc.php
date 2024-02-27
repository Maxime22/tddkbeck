<?php
declare(strict_types=1);

namespace App;

class Franc extends Money
{
    private string $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = "CHF";
    }

    public function times(int $multiplier) : Money
    {
        return new Franc($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return $this->currency;
    }

}