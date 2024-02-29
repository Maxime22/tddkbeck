<?php
declare(strict_types=1);

namespace App;
interface  ExpressionInterface
{
    public function reduce(Bank $bank, string $to): Money;
    public function plus(ExpressionInterface $addend): ExpressionInterface;
    public function times(int $multiplier): ExpressionInterface;
}
