<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Money;

class MoneyTest extends TestCase
{
    private Money $sut;

    protected function setUp(): void
    {
        $this->sut = new Money();
    }

    /** @test **/
    public function it_should_return_true(): void
    {
        $this->assertTrue($this->sut->foo());
    }
}