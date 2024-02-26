<?php
declare(strict_types=1);

use App\Dollar;
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

class MoneyTest extends TestCase
{

    /** @test **/
    public function multiplication(): void
    {
        $five = new Dollar(5);
        $this->assertEquals(new Dollar(10), $five->times(2));
        $this->assertEquals(new Dollar(15), $five->times(3));
    }

    /** @test */
    public function testEquality(): void
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
    }
}