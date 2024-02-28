<?php
declare(strict_types=1);

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = "USD";
    }

    public function times(int $multiplier) : Money
    {
        return new Dollar($this->amount * $multiplier, null);
    }
}