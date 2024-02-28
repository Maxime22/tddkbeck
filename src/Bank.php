<?php
declare(strict_types=1);

namespace App;

class Bank
{
    public function reduce(ExpressionInterface $source, string $to): Money
    {
        $sum = $source;
        $amount = $sum->augend->amount + $sum->addend->amount;
        return new Money($amount, $to);
    }
}