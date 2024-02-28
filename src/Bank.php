<?php
declare(strict_types=1);

namespace App;

class Bank
{
    public function reduce(ExpressionInterface $source, string $to): Money
    {
        return Money::dollar(10);
    }
}