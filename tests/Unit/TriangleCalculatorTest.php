<?php

namespace App\Tests\Unit;

use App\Entities\Triangle;
use App\Services\ShapeCalculator;
use PHPUnit\Framework\TestCase;

class TriangleCalculatorTest extends TestCase
{
    /**
     * Test if the TriangleCalculatorReturns correct surface.
     * @return void
     */
    public function testCalculateTriangleArea(): void
    {
        $shapeCalculator = new ShapeCalculator();
        $triangle = new Triangle(3, 4, 5);

        $triangle = $shapeCalculator->calculate($triangle);

        $this->assertEquals($triangle->getSurface(), 6);
    }

    /**
     * Test if the Triangle calculator returns correct circumference.
     * @return void
     */
    public function testCalculateTriangleCircumference(): void
    {
        $shapeCalculator = new ShapeCalculator();
        $triangle = new Triangle(7, 25, 30);

        $triangle = $shapeCalculator->calculate($triangle);

        $this->assertEquals($triangle->getCircumference(), 62);
    }
}