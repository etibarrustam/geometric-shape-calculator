<?php

namespace App\Services;

use App\Entities\ShapeInterface;

class ShapeCalculator
{
    /**
     * Calculate Shape area by given Shape type.
     * @param ShapeInterface $shape
     * @return ShapeInterface
     */
    public function calculate(ShapeInterface $shape): ShapeInterface
    {
        return $shape->calculate();
    }
}