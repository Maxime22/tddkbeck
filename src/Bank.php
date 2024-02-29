<?php
declare(strict_types=1);

namespace App;

class Bank
{
    private array $rates = [];

    public function reduce(ExpressionInterface $source, string $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(string $from, string $to, int $rate): void
    {
        $pair = new Pair($from, $to);
        $this->rates[(string)$pair] = $rate;
    }

    public function rate($from, $to): int
    {
        $pair = new Pair($from, $to);
        return $this->rates[(string)$pair];
    }
}