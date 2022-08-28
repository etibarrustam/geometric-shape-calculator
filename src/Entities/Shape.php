<?php

namespace App\Entities;

use ReflectionClass;

abstract class Shape implements ShapeInterface
{
    /**
     * @var float
     */
    private float $surface;

    /**
     * @var float
     */
    private float $circumference;

    /**
     * @inheritDoc
     */
    public function getType(): string
    {
        return strtolower((new ReflectionClass(self::class))->getShortName());
    }

    /**
     * @inheritDoc
     */
    public function getSurface(): float
    {
        return $this->surface;
    }

    /**
     * @inheritDoc
     */
    public function setSurface(float $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCircumference(): float
    {
        return $this->circumference;
    }

    /**
     * @inheritDoc
     */
    public function setCircumference(float $circumference): self
    {
        $this->circumference = $circumference;

        return $this;
    }

    /**
     * Calculate shape areas.
     * @return $this
     */
    abstract public function calculate(): self;
}