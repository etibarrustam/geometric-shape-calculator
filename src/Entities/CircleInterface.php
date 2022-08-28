<?php

namespace App\Entities;

interface CircleInterface
{
    /**
     * CircleInterface constructor.
     * @param float $radius
     */
    public function __construct(float $radius);

    /**
     * Set radius.
     * @param float $radius
     * @return $this
     */
    public function setRadius(float $radius): self;

    /**
     * Get radius.
     * @return float
     */
    public function getRadius(): float;
}