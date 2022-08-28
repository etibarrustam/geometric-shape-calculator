<?php

namespace App\Tests\Unit;

use App\Entities\Circle;
use App\Entities\Triangle;
use App\Services\ShapeCalculator;
use PHPUnit\Framework\TestCase;

class CircleCalculatorTest extends TestCase
{
    /**
     * Test if the TriangleCalculatorReturns correct surface.
     * @return void
     */
    public function testCalculateTriangleArea(): void
    {
        $shapeCalculator = new ShapeCalculator();
        $circle = new Circle(2);

        $circle = $shapeCalculator->calculate($circle);

        $this->assertEquals($circle->getSurface(), 6);
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