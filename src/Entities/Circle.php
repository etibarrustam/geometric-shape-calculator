<?php

namespace App\Entities;

class Circle extends Shape implements CircleInterface
{
    /**
     * @var float
     */
    private float $radius;

    /**
     * @inheritDoc
     */
    public function __construct(float $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @inheritDoc
     */
    public function setRadius(float $radius): self
    {
        $this->radius = $radius;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRadius(): float
    {
        return $this->radius;
    }

    /**
     * @inheritDoc
     */
    public function calculate(): self
    {
        $this->setSurface(($this->radius ** 2) * pi());
        $this->setCircumference(($this->radius ** 2) * pi());

        return $this;
    }
}