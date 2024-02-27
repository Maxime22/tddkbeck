<?php
declare(strict_types=1);

namespace App;

class Dollar extends Money
{
    private string $currency;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = "USD";
    }

    public function times(int $multiplier) : Money
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function currency(): string
    {
        return $this->currency;
    }
}