<?php
declare(strict_types=1);

namespace App;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier)
    {
        $this->amount = $this->amount * $multiplier;
    }
}