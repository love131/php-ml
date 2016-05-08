<?php

declare (strict_types = 1);

namespace test\Phpml\Math\StandardDeviation;

use Phpml\Math\Statistic\Mean;

class MeanTest extends \PHPUnit_Framework_TestCase
{
    public function testArithmeticMean()
    {
        $delta = 0.01;
        $this->assertEquals(3.5, Mean::arithmetic([2, 5]), '', $delta);
        $this->assertEquals(41.16, Mean::arithmetic([43, 21, 25, 42, 57, 59]), '', $delta);
        $this->assertEquals(1.7, Mean::arithmetic([0.5, 0.5, 1.5, 2.5, 3.5]), '', $delta);
    }

    /**
     * @expectedException \Phpml\Exception\InvalidArgumentException
     */
    public function testThrowExceptionOnEmptyArrayMedian()
    {
        Mean::median([]);
    }

    public function testMedianOnOddLengthArray()
    {
        $numbers = [5, 2, 6, 1, 3];

        $this->assertEquals(3, Mean::median($numbers));
    }

    public function testMedianOnEvenLengthArray()
    {
        $numbers = [5, 2, 6, 1, 3, 4];

        $this->assertEquals(3.5, Mean::median($numbers));
    }

}
