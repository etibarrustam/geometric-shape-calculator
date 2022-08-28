<?php

namespace App\Entities;

interface ShapeInterface
{
    /**
     * Get shape type.
     * @return string
     */
    public function getType(): string;

    /**
     * Get calculated surface.
     * @return float
     */
    public function getSurface(): float;

    /**
     * Get calculated circumference.
     * @return float
     */
    public function getCircumference(): float;

    /**
     * Set calculated circumference.
     * @param float $circumference
     * @return ShapeInterface
     */
    public function setCircumference(float $circumference): self;
}