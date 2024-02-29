<?php
declare(strict_types=1);

namespace App;

class Pair
{
    private string $from;
    private string $to;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    public function equals(Pair $pair): bool
    {
        return $this->from == $pair->from && $this->to == $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }

    // PHP ne supporte pas directement les objets comme clés de tableau,
    // donc on utilise une chaîne qui représente de manière unique la paire.
    public function __toString() {
        return $this->from . "-" . $this->to;
    }

}