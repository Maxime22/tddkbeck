<?php
declare(strict_types=1);

namespace App;

class Money
{
    protected $amount;
    protected $currency;

    public function times(int $multiplier) : ?Money
    {
        return null;
    }

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public static function dollar($amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc($amount): Money
    {
        return new Franc($amount, "CHF");
    }

    public function equals(object $money): bool
    {
        if (!($money instanceof Money)) {
            return false;
        }
        return ($this->amount == $money->amount) && ($this->currency() == $money->currency());
    }

    public function currency(): string
    {
        return $this->currency;
    }
}