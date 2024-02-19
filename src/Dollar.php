<?php
declare(strict_types=1);

namespace App;

class Dollar
{
    public $amount;
    private int $int;

    public function __construct(int $int)
    {
        $this->int = $int;
    }

    public function times(int $multiplier)
    {
        $this->amount = 5 * 2;
    }
}