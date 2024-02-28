<?php
declare(strict_types=1);

use App\Bank;
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


// $5 + 10CHF = $10 if rate is 2:1
// $5 + $5 = $10
// Return Money from $5 + $5

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

    /** @test **/
    public function simpleAddition(): void
    {
        $five = Money::dollar(5);
        $sum = $five->plus($five);
        $bank = new Bank();
        $reduced = $bank->reduce($sum, "USD");
        $this->assertTrue((Money::dollar(10))->equals($reduced));
    }

    /** @test **/
    public function plusReturnsSum(): void
    {
        $five = Money::dollar(5);
        $result = $five->plus($five);
        $sum = new Sum($result);
        $this->assertTrue($five->equals($sum->augend));
        $this->assertTrue($five->equals($sum->addend));
    }
}