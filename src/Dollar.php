<?php
declare(strict_types=1);

namespace App;

class Dollar
{
    public $amount = 10;
    private int $int;

    public function __construct(int $int)
    {
        $this->int = $int;
    }

    public function times(int $multiplier)
    {
    }
}