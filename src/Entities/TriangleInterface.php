<?php

namespace App\Entities;

interface TriangleInterface
{
    /**
     * TriangleInterface constructor.
     * @param float $a
     * @param float $b
     * @param float $c
     */
    public function __construct(float $a, float $b, float $c);

    /**
     * Set A segment
     * @param float $a
     * @return $this
     */
    public function setA(float $a): self;

    /**
     * Get A segment
     * @return float
     */
    public function getA(): float;

    /**
     * Set B segment
     * @param float $b
     * @return $this
     */
    public function setB(float $b): self;

    /**
     * Get B segment
     * @return float
     */
    public function getB(): float;

    /**
     * Set C segment
     * @param float $c
     * @return $this
     */
    public function setC(float $c): self;

    /**
     * Get C segment
     * @return float
     */
    public function getC(): float;
}