<?php

namespace App\Entities;

class Triangle extends Shape implements TriangleInterface
{
    /**
     * A segment.
     * @var float
     */
    private float $a;

    /**
     * B segment.
     * @var float
     */
    private float $b;

    /**
     * C segment.
     * @var float
     */
    private float $c;

    /**
     * @inheritDoc
     */
    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @inheritDoc
     */
    public function setA(float $a): TriangleInterface
    {
        $this->a = $a;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getA(): float
    {
        return $this->a;
    }

    /**
     * @inheritDoc
     */
    public function setB(float $b): TriangleInterface
    {
        $this->b = $b;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getB(): float
    {
        return $this->b;
    }

    /**
     * @inheritDoc
     */
    public function setC(float $c): TriangleInterface
    {
        $this->c = $c;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getC(): float
    {
        return $this->c;
    }

    /**
     * @inheritDoc
     */
    public function calculate(): self
    {
        $s = ($this->a + $this->b + $this->c) / 2;
        $this->setSurface(sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c)));
        $this->setCircumference($this->a + $this->b + $this->c);

        return $this;
    }
}