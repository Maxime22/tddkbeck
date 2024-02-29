<?php
declare(strict_types=1);

namespace App;

class Sum implements ExpressionInterface
{
    public ExpressionInterface $augend;
    public ExpressionInterface $addend;

    public function __construct(ExpressionInterface $augend, ExpressionInterface $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function reduce(Bank $bank, string $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount + $this->addend->reduce($bank, $to)->amount;
        return new Money($amount, $to);
    }

    public function plus(ExpressionInterface $addend): ExpressionInterface
    {
        return new Sum($this, $addend);
    }
}