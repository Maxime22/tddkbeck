<?php
declare(strict_types=1);

namespace App;

class Money implements ExpressionInterface
{
    public $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public static function dollar($amount): Money
    {
        return new Money($amount, "USD");
    }

    public static function franc($amount): Money
    {
        return new Money($amount, "CHF");
    }

    public function equals(object $money): bool
    {
        if (!($money instanceof Money)) {
            return false;
        }
        return ($this->amount == $money->amount) && ($this->currency() == $money->currency());
    }

    public function times(int $multiplier): ExpressionInterface
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function plus(ExpressionInterface $addend): ExpressionInterface
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $rate = $bank->rate($this->currency, $to);
        return new Money($this->amount / $rate, $to);
    }
}