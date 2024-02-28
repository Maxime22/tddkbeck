<?php
declare(strict_types=1);

namespace App;
interface  ExpressionInterface
{
    public function reduce(string $to): Money;
}
