<?php
declare(strict_types=1);

namespace App;

class Bank
{
    public function reduce(ExpressionInterface $source, string $to): Money
    {
        if($source instanceof Money){
            return $source->reduce($to);
        }
        $sum = $source;
        return $sum->reduce($to);
    }
}