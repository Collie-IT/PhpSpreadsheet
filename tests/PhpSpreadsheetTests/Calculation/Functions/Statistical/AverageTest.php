<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\Statistical;

use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Calculation\Statistical;
use PHPUnit\Framework\TestCase;

class AverageTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
    }

    /**
     * @dataProvider providerAVERAGE
     *
     * @param mixed $expectedResult
     */
    public function testAVERAGE($expectedResult, ...$args)
    {
        $result = Statistical::AVERAGE(...$args);
        $this->assertEqualsWithDelta($expectedResult, $result, 1E-12);
    }

    public function providerAVERAGE()
    {
        return require 'data/Calculation/Statistical/AVERAGE.php';
    }
}
