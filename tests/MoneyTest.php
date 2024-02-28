<?php
declare(strict_types=1);

use App\Money;
use PHPUnit\Framework\TestCase;

// $5 + 10CHF = $10 if rate is 2:1
// $5 * 2 = $10 ✔️
// Make "amount" private ✔️
// Dollar side-effects ? ✔️
// Money rounding ?
// equals() ✔️
// hashCode()
// Equal null
// Equal object
// 5 CHF * 2 = 10 CHF ✔️
// Dollar/Franc duplication ✔️
// Common equals ✔️
// Common times ✔️
// Compare Francs with Dollars ✔️
// Currency? ✔️
// Delete testFrancMultiplication? ✔️

class MoneyTest extends TestCase
{

    /** @test **/
    public function dollarMultiplication(): void
    {
        $five = Money::dollar(5);
        $this->assertTrue((Money::dollar(10))->equals($five->times(2)));
        $this->assertTrue((Money::dollar(15))->equals($five->times(3)));
    }

    /** @test */
    public function equality(): void
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    /** @test **/
    public function currency(): void
    {
        $this->assertEquals("USD", Money::dollar(1)->currency());
        $this->assertEquals("CHF", Money::franc(1)->currency());
    }
}